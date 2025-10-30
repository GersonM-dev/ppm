<?php

namespace App\Filament\Resources\Pengumumen;

use App\Filament\Resources\Pengumumen\Pages\CreatePengumuman;
use App\Filament\Resources\Pengumumen\Pages\EditPengumuman;
use App\Filament\Resources\Pengumumen\Pages\ListPengumumen;
use App\Filament\Resources\Pengumumen\Pages\ViewPengumuman;
use App\Filament\Resources\Pengumumen\Schemas\PengumumanForm;
use App\Filament\Resources\Pengumumen\Schemas\PengumumanInfolist;
use App\Filament\Resources\Pengumumen\Tables\PengumumenTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Models\Pengumuman;

class PengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;

    protected static ?string $pluralLabel = 'Pengumuman';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PengumumanForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PengumumanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PengumumenTable::configure($table);
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
            'index' => ListPengumumen::route('/'),
            'create' => CreatePengumuman::route('/create'),
            'view' => ViewPengumuman::route('/{record}'),
            'edit' => EditPengumuman::route('/{record}/edit'),
        ];
    }
}
