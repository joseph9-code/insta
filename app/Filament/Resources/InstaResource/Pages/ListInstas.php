<?php

namespace App\Filament\Resources\InstaResource\Pages;

use App\Filament\Resources\InstaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInstas extends ListRecords
{
    protected static string $resource = InstaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
