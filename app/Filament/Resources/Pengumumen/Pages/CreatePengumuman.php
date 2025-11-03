<?php

namespace App\Filament\Resources\Pengumumen\Pages;

use App\Filament\Resources\Pengumumen\PengumumanResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePengumuman extends CreateRecord
{
    protected static string $resource = PengumumanResource::class;

    public function getTitle(): string
    {
        return 'Tambah Pengumuman';
    }
}
