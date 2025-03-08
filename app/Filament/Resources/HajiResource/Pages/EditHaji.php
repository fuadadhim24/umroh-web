<?php

namespace App\Filament\Resources\HajiResource\Pages;

use App\Filament\Resources\HajiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHaji extends EditRecord
{
    protected static string $resource = HajiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return HajiResource::getUrl('index');
    }
}
