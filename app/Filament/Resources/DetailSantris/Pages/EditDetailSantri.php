<?php

namespace App\Filament\Resources\DetailSantris\Pages;

use App\Filament\Resources\DetailSantris\DetailSantriResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDetailSantri extends EditRecord
{
    protected static string $resource = DetailSantriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make()->label('Lihat Data Santri'),
            DeleteAction::make()->label('Hapus Data Santri'),
        ];
    }

    public function getTitle(): string
    {
        return 'Edit Data Santri';
    }
}
