<?php

namespace App\Filament\Resources\BadalResource\Pages;

use App\Filament\Resources\BadalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBadals extends ListRecords
{
    protected static string $resource = BadalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
