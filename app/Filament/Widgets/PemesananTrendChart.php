<?php

namespace App\Filament\Widgets;

use App\Models\Pemesanan;
use Filament\Widgets\LineChartWidget;
use Illuminate\Support\Carbon;

class PemesananTrendChart extends LineChartWidget
{
    protected ?string $heading = 'Tren Pemesanan 12 Bulan';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $start = Carbon::now()->subMonths(11)->startOfMonth();
        $end = Carbon::now()->endOfMonth();

        $rawData = Pemesanan::query()
            ->whereBetween('order_date', [$start, $end])
            ->selectRaw('DATE_FORMAT(order_date, "%Y-%m") as period')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('period')
            ->orderBy('period')
            ->get()
            ->keyBy('period');

        $labels = [];
        $counts = [];

        for ($date = $start->copy(); $date->lte($end); $date->addMonth()) {
            $key = $date->format('Y-m');
            $labels[] = $date->translatedFormat('M Y');
            $counts[] = (int) ($rawData[$key]->total ?? 0);
        }

        return [
            'datasets' => [
                [
                    'label' => 'Pemesanan',
                    'data' => $counts,
                    'borderColor' => '#6366f1',
                    'backgroundColor' => 'rgba(99, 102, 241, 0.2)',
                    'fill' => true,
                ],
            ],
            'labels' => $labels,
        ];
    }
}
