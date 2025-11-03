<?php

namespace App\Filament\Widgets;

use App\Models\DetailSantri;
use Filament\Widgets\PieChartWidget;

class DetailSantriGenderChart extends PieChartWidget
{
    protected ?string $heading = 'Detail Santri per Jenis Kelamin';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $records = DetailSantri::query()
            ->select('jenis_kelamin')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('jenis_kelamin')
            ->get()
            ->keyBy(fn ($row) => $row->jenis_kelamin ?? 'Tidak diisi');

        $labels = [];
        $counts = [];

        foreach ($records as $label => $row) {
            $labels[] = $label;
            $counts[] = $row->total;
        }

        if (empty($labels)) {
            $labels = ['Data Tidak Tersedia'];
            $counts = [0];
        }

        return [
            'datasets' => [
                [
                    'data' => $counts,
                    'backgroundColor' => [
                        '#0ea5e9',
                        '#f97316',
                        '#94a3b8',
                    ],
                ],
            ],
            'labels' => $labels,
        ];
    }
}
