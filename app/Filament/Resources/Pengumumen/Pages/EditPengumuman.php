<?php

namespace App\Filament\Resources\Pengumumen\Pages;

use App\Filament\Resources\Pengumumen\PengumumanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPengumuman extends EditRecord
{
    protected static string $resource = PengumumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make()->label('Lihat Preview Pengumuman'),
            DeleteAction::make()->label('Hapus Pengumuman'),
        ];
    }

        public function getTitle(): string
    {
        return 'Edit Pengumuman';
    }
}
