<?php

namespace App\Filament\Resources\BadalResource\Pages;

use App\Filament\Resources\BadalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBadal extends EditRecord
{
    protected static string $resource = BadalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
