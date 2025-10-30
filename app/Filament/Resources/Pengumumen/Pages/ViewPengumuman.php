<?php

namespace App\Filament\Resources\Pengumumen\Pages;

use App\Filament\Resources\Pengumumen\PengumumanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPengumuman extends ViewRecord
{
    protected static string $resource = PengumumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()->label('Edit Pengumuman'),
        ];
    }
}
