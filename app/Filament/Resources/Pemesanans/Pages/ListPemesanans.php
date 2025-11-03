<?php

namespace App\Filament\Resources\Pemesanans\Pages;

use App\Filament\Resources\Pemesanans\PemesananResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPemesanans extends ListRecords
{
    protected static string $resource = PemesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Tambah Pemesanan'),
        ];
    }

    public function getTitle(): string
    {
        return 'Pemesanan';
    }
}
