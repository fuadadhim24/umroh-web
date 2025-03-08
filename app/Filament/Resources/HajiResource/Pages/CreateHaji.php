<?php

namespace App\Filament\Resources\HajiResource\Pages;

use App\Filament\Resources\HajiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Haji;

class CreateHaji extends CreateRecord
{
    protected static string $resource = HajiResource::class;
    protected function getRedirectUrl(): string
    {
        return HajiResource::getUrl('index');
    }
}
