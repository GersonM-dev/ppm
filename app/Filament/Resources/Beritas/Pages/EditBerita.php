<?php

namespace App\Filament\Resources\Beritas\Pages;

use App\Filament\Resources\Beritas\BeritaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBerita extends EditRecord
{
    protected static string $resource = BeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make()->label('Lihat Preview Kegiatan Belajar Mengajar'),
            DeleteAction::make()->label('Hapus Kegiatan Belajar Mengajar'),
        ];
    }

        public function getTitle(): string
    {
        return 'Edit Kegiatan Belajar Mengajar';
    }
}
