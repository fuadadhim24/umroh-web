<?php

namespace App\Filament\Resources\HajiResource\Pages;

use App\Filament\Resources\HajiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHajis extends ListRecords
{
    protected static string $resource = HajiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
