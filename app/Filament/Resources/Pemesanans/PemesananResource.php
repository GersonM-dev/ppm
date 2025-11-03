<?php

namespace App\Filament\Resources\Pemesanans;

use App\Filament\Resources\Pemesanans\Pages\CreatePemesanan;
use App\Filament\Resources\Pemesanans\Pages\EditPemesanan;
use App\Filament\Resources\Pemesanans\Pages\ListPemesanans;
use App\Filament\Resources\Pemesanans\Pages\ViewPemesanan;
use App\Filament\Resources\Pemesanans\Schemas\PemesananForm;
use App\Filament\Resources\Pemesanans\Schemas\PemesananInfolist;
use App\Filament\Resources\Pemesanans\Tables\PemesanansTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Models\Pemesanan;

class PemesananResource extends Resource
{
    protected static ?string $model = Pemesanan::class;
    protected static ?string $pluralLabel = 'Pemesanan';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ShoppingCart;

    public static function form(Schema $schema): Schema
    {
        return PemesananForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PemesananInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PemesanansTable::configure($table);
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
            'index' => ListPemesanans::route('/'),
            'create' => CreatePemesanan::route('/create'),
            'view' => ViewPemesanan::route('/{record}'),
            'edit' => EditPemesanan::route('/{record}/edit'),
        ];
    }
}
