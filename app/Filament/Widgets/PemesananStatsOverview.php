<?php

namespace App\Filament\Widgets;

use App\Models\DetailSantri;
use App\Models\Pemesanan;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PemesananStatsOverview extends StatsOverviewWidget
{
    protected ?string $heading = 'Ringkasan';

    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalOrders = Pemesanan::query()->count();
        $totalAmount = Pemesanan::query()->sum('total_amount');
        $totalSantri = DetailSantri::query()->count();

        return [
            Stat::make('Total Pemesanan', number_format($totalOrders))
                ->description('Semua pesanan tercatat'),
            Stat::make('Nominal Pemesanan', 'Rp ' . number_format($totalAmount, 0, ',', '.'))
                ->description('Akumulasi total_amount'),
            Stat::make('Detail Santri', number_format($totalSantri))
                ->description('Semua data detail santri'),
        ];
    }
}
