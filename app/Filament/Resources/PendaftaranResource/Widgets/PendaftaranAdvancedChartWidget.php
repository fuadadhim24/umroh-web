<?php

namespace App\Filament\Resources\PendaftaranResource\Widgets;

use EightyNine\FilamentAdvancedWidget\AdvancedChartWidget;
use Carbon\Carbon;
use App\Models\Pendaftaran;
class PendaftaranAdvancedChartWidget extends AdvancedChartWidget
{
    protected static ?string $heading = 'Diagram';
    protected static string $color = 'success';
    protected static ?string $icon = 'heroicon-o-chart-bar';
    protected static ?string $iconColor = 'success';
    protected static ?string $iconBackgroundColor = 'success';
    protected static ?string $label = 'Bulanan pendaftar';
 
    protected static ?string $badge = 'terbaru';
    protected static ?string $badgeColor = 'success';
    protected static ?string $badgeIcon = 'heroicon-o-check-circle';
    protected static ?string $badgeIconPosition = 'after';
    protected static ?string $badgeSize = 'xs';


    public ?string $filter = 'month';
 

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Hari ini',
            'week' => 'Minggu ini',
            'month' => 'Bulan ini',
            'year' => 'Tahun ini',
        ];
    }
    protected function getData(): array
    {
        $data = [];
        $labels = [];
        
        switch ($this->filter) {
            case 'today':
                $data = [Pendaftaran::whereDate('created_at', Carbon::today())->count()];
                $labels = [Carbon::today()->format('d M Y')];
                break;

            case 'week':
                for ($i = 0; $i < 7; $i++) {
                    $date = Carbon::today()->subDays($i);
                    $data[] = Pendaftaran::whereDate('created_at', $date)->count();
                    $labels[] = $date->format('d M');
                }
                break;

            case 'month':
                for ($i = 0; $i < 6; $i++) {
                    $startOfMonth = Carbon::now()->subMonths($i)->startOfMonth();
                    $endOfMonth = Carbon::now()->subMonths($i)->endOfMonth();
                    $data[] = Pendaftaran::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
                    $labels[] = $startOfMonth->format('F Y');
                }
                break;

            case 'year':
                for ($i = 0; $i < 12; $i++) {
                    $month = Carbon::now()->subMonths($i);
                    $data[] = Pendaftaran::whereMonth('created_at', $month->month)
                        ->whereYear('created_at', $month->year)
                        ->count();
                    $labels[] = $month->format('F');
                }
                break;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Pendaftar',
                    'data' => array_reverse($data), // Reverse to show the latest data first
                ],
            ],
            'labels' => array_reverse($labels), // Reverse to match the data
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
