<?php

namespace App\Filament\Resources\DetailSantris\Pages;

use App\Filament\Resources\DetailSantris\DetailSantriResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDetailSantri extends ViewRecord
{
    protected static string $resource = DetailSantriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()->label('Edit Data Santri'),
        ];
    }

    public function getTitle(): string
    {
        return 'Lihat Data Santri';
    }
}
