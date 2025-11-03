<?php

namespace App\Filament\Resources\Beritas\Pages;

use App\Filament\Resources\Beritas\BeritaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBerita extends ViewRecord
{
    protected static string $resource = BeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()->label('Edit Kegiatan Belajar Mengajar'),
        ];
    }

        public function getTitle(): string
    {
        return 'Lihat Kegiatan Belajar Mengajar';
    }
}
