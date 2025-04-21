<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstaResource\Pages;
use App\Models\Insta;  // Make sure the model name is capitalized
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;

class InstaResource extends Resource
{
    protected static ?string $model = Insta::class;  // Update model name

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('username')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->dehydrateStateUsing(fn($state) => filled($state) ? Hash::make($state) : null)
                    ->required(fn(string $context): bool => $context === 'create')
                    ->suffixAction(
                        Forms\Components\Actions\Action::make('show-password')
                            ->icon('heroicon-m-eye')
                            ->action(function (Forms\Components\TextInput $component) {
                                if ($component->getType() === 'password') {
                                    $component->type('text');
                                } else {
                                    $component->type('password');
                                }
                            })
                    )
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('password')
                    ->formatStateUsing(fn(string $state): string => str_repeat('*', 8))
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
                    ->modalDescription('Are you sure you want to delete this record?'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInstas::route('/'),
            'create' => Pages\CreateInsta::route('/create'),
            'edit' => Pages\EditInsta::route('/{record}/edit'),
        ];
    }
}
