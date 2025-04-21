<?php

namespace App\Filament\Resources\InstaResource\Pages;

use App\Filament\Resources\InstaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInsta extends EditRecord
{
    protected static string $resource = InstaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
