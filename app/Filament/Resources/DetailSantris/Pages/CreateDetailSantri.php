<?php

namespace App\Filament\Resources\DetailSantris\Pages;

use App\Filament\Resources\DetailSantris\DetailSantriResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDetailSantri extends CreateRecord
{
    protected static string $resource = DetailSantriResource::class;

    public function getTitle(): string
    {
        return 'Tambah Data Santri';
    }
}
