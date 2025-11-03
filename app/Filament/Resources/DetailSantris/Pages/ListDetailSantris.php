<?php

namespace App\Filament\Resources\DetailSantris\Pages;

use App\Filament\Resources\DetailSantris\DetailSantriResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDetailSantris extends ListRecords
{
    protected static string $resource = DetailSantriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Tambah Data Santri'),
        ];
    }
}
