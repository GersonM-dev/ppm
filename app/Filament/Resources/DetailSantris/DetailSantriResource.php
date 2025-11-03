<?php

namespace App\Filament\Resources\DetailSantris;

use App\Filament\Resources\DetailSantris\Pages\CreateDetailSantri;
use App\Filament\Resources\DetailSantris\Pages\EditDetailSantri;
use App\Filament\Resources\DetailSantris\Pages\ListDetailSantris;
use App\Filament\Resources\DetailSantris\Pages\ViewDetailSantri;
use App\Filament\Resources\DetailSantris\Schemas\DetailSantriForm;
use App\Filament\Resources\DetailSantris\Schemas\DetailSantriInfolist;
use App\Filament\Resources\DetailSantris\Tables\DetailSantrisTable;
use BackedEnum;
use App\Models\DetailSantri;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DetailSantriResource extends Resource
{
    protected static ?string $model = DetailSantri::class;

    protected static ?string $pluralLabel = 'Data Santri';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Users;

    public static function form(Schema $schema): Schema
    {
        return DetailSantriForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DetailSantriInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DetailSantrisTable::configure($table);
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
            'index' => ListDetailSantris::route('/'),
            'create' => CreateDetailSantri::route('/create'),
            'view' => ViewDetailSantri::route('/{record}'),
            'edit' => EditDetailSantri::route('/{record}/edit'),
        ];
    }
}
