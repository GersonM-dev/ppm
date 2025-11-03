<?php

namespace App\Filament\Resources\Pengumumen\Pages;

use App\Filament\Resources\Pengumumen\PengumumanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPengumumen extends ListRecords
{
    protected static string $resource = PengumumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Buat Pengumuman Baru'),
        ];
    }

    public function getTitle(): string
    {
        return 'Pengumuman';
    }
}
