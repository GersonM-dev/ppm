<?php

namespace App\Filament\Resources\Beritas;

use App\Filament\Resources\Beritas\Pages\CreateBerita;
use App\Filament\Resources\Beritas\Pages\EditBerita;
use App\Filament\Resources\Beritas\Pages\ListBeritas;
use App\Filament\Resources\Beritas\Pages\ViewBerita;
use App\Filament\Resources\Beritas\Schemas\BeritaForm;
use App\Filament\Resources\Beritas\Schemas\BeritaInfolist;
use App\Filament\Resources\Beritas\Tables\BeritasTable;
use BackedEnum;
use App\Models\Berita;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $pluralLabel = 'Kegiatan Belajar Mengajar';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::InformationCircle;

    public static function form(Schema $schema): Schema
    {
        return BeritaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BeritaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BeritasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBeritas::route('/'),
            'create' => CreateBerita::route('/create'),
            'view' => ViewBerita::route('/{record}'),
            'edit' => EditBerita::route('/{record}/edit'),
        ];
    }
}
