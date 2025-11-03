<?php

namespace App\Filament\Resources\Pemesanans\Pages;

use App\Filament\Resources\Pemesanans\PemesananResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePemesanan extends CreateRecord
{
    protected static string $resource = PemesananResource::class;

    public function getTitle(): string
    {
        return 'Tambah Data Pemesanan';
    }
}
