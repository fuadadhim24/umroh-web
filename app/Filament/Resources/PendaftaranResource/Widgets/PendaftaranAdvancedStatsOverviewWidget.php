<?php

namespace App\Filament\Resources\PendaftaranResource\Widgets;

use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Artikel;
use App\Models\Pendaftaran;
use App\Models\Paket;
use Carbon\Carbon;
use App\Models\Haji;
use App\Models\Badal;

class PendaftaranAdvancedStatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalPendaftar = Pendaftaran::count();
        $totalArtikel = Artikel::count();
        $totalPaket = Paket::count();
        $totalHaji = Haji::count();
        $totalBadal = Badal::count();

        $pendaftarChartData = $this->getMonthlyPendaftaranCounts('pendaftaran');
        $paketChartData = $this->getMonthlyPendaftaranCounts('paket');
        $artikelChartData = $this->getMonthlyPendaftaranCounts('artikel');
        $hajiChartData = $this->getMonthlyPendaftaranCounts('haji');
        $badalChartData = $this->getMonthlyPendaftaranCounts('badal');

        $pendaftarBulanIni = Pendaftaran::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();
        $paketBulanIni = Paket::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();
        $artikelBulanIni = Artikel::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();
        $hajiBulanIni = Haji::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();
        $badalBulanIni = Badal::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();

        $paketBulanKemarin = Paket::whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->whereYear('created_at', Carbon::now()->subMonth()->year)
            ->count();
        $artikelBulanKemarin = Artikel::whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->whereYear('created_at', Carbon::now()->subMonth()->year)
            ->count();
        $pendaftarBulanKemarin = Pendaftaran::whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->whereYear('created_at', Carbon::now()->subMonth()->year)
            ->count();
        $hajiBulanKemarin = Haji::whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->whereYear('created_at', Carbon::now()->subMonth()->year)
            ->count();
        $badalBulanKemarin = Badal::whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->whereYear('created_at', Carbon::now()->subMonth()->year)
            ->count();

        $pendaftarDescriptionIcon = $pendaftarBulanIni > $pendaftarBulanKemarin ? 'heroicon-o-chevron-up' : 'heroicon-o-chevron-down';
        $artikelDescriptionIcon = $artikelBulanIni > $artikelBulanKemarin ? 'heroicon-o-chevron-up' : 'heroicon-o-chevron-down';
        $paketDescriptionIcon = $paketBulanIni > $paketBulanKemarin ? 'heroicon-o-chevron-up' : 'heroicon-o-chevron-down';
        $hajiDescriptionIcon = $hajiBulanIni > $hajiBulanKemarin ? 'heroicon-o-chevron-up' : 'heroicon-o-chevron-down';
        $badalDescriptionIcon = $badalBulanIni > $badalBulanKemarin ? 'heroicon-o-chevron-up' : 'heroicon-o-chevron-down';
        return [
            Stat::make('Total Pendaftar', number_format($totalPendaftar))
                ->icon('heroicon-o-user')

                ->chart($pendaftarChartData)
                ->color('success')
                // ->backgroundColor('info')
                // ->progress(69)
                // ->progressBarColor('success')
                // ->iconBackgroundColor('success')
                // ->chartColor('success')
                // ->iconPosition('start')
                ->description('Jumlah pendaftar bulan ini: ' . number_format($pendaftarBulanIni))
                ->descriptionIcon($pendaftarDescriptionIcon, 'before')
                ->descriptionColor($pendaftarBulanIni > $pendaftarBulanKemarin ? 'success' : 'danger'),
            // ->descriptionIcon('heroicon-o-chevron-up', 'before')
            // ->descriptionColor('success')
            // ->iconColor('success'),

            Stat::make('Total Artikel', number_format($totalArtikel))
                ->icon('heroicon-o-newspaper')
                ->description('Jumlah artikel bulan ini: ' . number_format($artikelBulanIni))
                ->descriptionIcon($artikelDescriptionIcon, 'before')
                // ->descriptionColor($artikelBulanIni > $artikelBulanKemarin ? 'success' : 'danger')
                // ->iconColor('warning')
                ->color('warning')
                ->chart($artikelChartData),
            Stat::make('Total Umroh', number_format($totalPaket))
                ->icon('heroicon-o-chat-bubble-left-ellipsis')
                ->description('Jumlah paket bulan ini: ' . number_format($paketBulanIni))
                ->descriptionIcon($paketDescriptionIcon, 'before')
                // ->descriptionColor($artikelBulanIni > $artikelBulanKemarin ? 'success' : 'danger')
                // ->iconColor('danger')
                ->color('danger')

                ->chart($paketChartData),
            Stat::make('Total Haji', number_format($totalHaji))
                ->icon('heroicon-o-rectangle-group')
                ->description('Jumlah haji bulan ini: ' . number_format($hajiBulanIni))
                ->descriptionIcon($hajiDescriptionIcon, 'before')
                // ->descriptionColor($artikelBulanIni > $artikelBulanKemarin ? 'success' : 'danger')
                // ->iconColor('danger')
                ->color('danger')

                ->chart($hajiChartData),
            Stat::make('Total Badal', number_format($totalBadal))
                ->icon('heroicon-o-queue-list')
                ->description('Jumlah badal bulan ini: ' . number_format($badalBulanIni))
                ->descriptionIcon($badalDescriptionIcon, 'before')
                // ->descriptionColor($artikelBulanIni > $artikelBulanKemarin ? 'success' : 'danger')
                // ->iconColor('danger')
                ->color('danger')

                ->chart($badalChartData),
        ];
    }
    protected function getMonthlyPendaftaranCounts($model): array
    {
        $now = Carbon::now();

        $counts = [];
        for ($i = 0; $i < 6; $i++) {
            $startOfMonth = $now->copy()->subMonths($i)->startOfMonth();
            $endOfMonth = $now->copy()->subMonths($i)->endOfMonth();

            if ($model == 'artikel') {
                $count = Artikel::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
            } elseif ($model == 'pendaftaran') {
                $count = Pendaftaran::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
            } elseif ($model == 'paket') {
                $count = Paket::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
            } elseif ($model == 'haji') {
                $count = Haji::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
            } elseif ($model == 'badal') {
                $count = Badal::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
            }
            $counts[] = $count;
        }
        return array_reverse($counts);
    }
}
