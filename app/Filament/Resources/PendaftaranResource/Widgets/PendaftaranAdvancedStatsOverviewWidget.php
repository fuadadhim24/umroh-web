<?php

namespace App\Filament\Resources\PendaftaranResource\Widgets;

use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Artikel;
use App\Models\Pendaftaran; 
use App\Models\Paket;
use Carbon\Carbon;

class PendaftaranAdvancedStatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalPendaftar = Pendaftaran::count();
        $totalArtikel = Artikel::count();
        $totalPaket = Paket::count();

        $pendaftarChartData = $this->getMonthlyPendaftaranCounts('pendaftaran');
        $paketChartData = $this->getMonthlyPendaftaranCounts('paket');
        $artikelChartData = $this->getMonthlyPendaftaranCounts('artikel');
        $pendaftarBulanIni = Pendaftaran::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();

        $paketBulanIni = Paket::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();
        $artikelBulanIni = Artikel::whereMonth('created_at', Carbon::now()->month)
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

        $pendaftarDescriptionIcon = $pendaftarBulanIni > $pendaftarBulanKemarin 
            ? 'heroicon-o-chevron-up' 
            : 'heroicon-o-chevron-down';
        $artikelDescriptionIcon = $artikelBulanIni > $artikelBulanKemarin 
            ? 'heroicon-o-chevron-up' 
            : 'heroicon-o-chevron-down';
        $paketDescriptionIcon = $paketBulanIni > $paketBulanKemarin 
            ? 'heroicon-o-chevron-up' 
            : 'heroicon-o-chevron-down';
        return [
            Stat::make('Total Pendaftar', number_format($totalPendaftar))->icon('heroicon-o-user')
            
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
            
        Stat::make('Total Artikel', number_format($totalArtikel))->icon('heroicon-o-newspaper')
            ->description('Jumlah artikel bulan ini: ' . number_format($artikelBulanIni))
            ->descriptionIcon($artikelDescriptionIcon, 'before')    
            // ->descriptionColor($artikelBulanIni > $artikelBulanKemarin ? 'success' : 'danger')
            // ->iconColor('warning')
            ->color('warning')
            ->chart($artikelChartData)  
            ,
        Stat::make('Total Paket', number_format($totalPaket))->icon('heroicon-o-chat-bubble-left-ellipsis')
            ->description("Jumlah paket bulan ini: " . number_format($paketBulanIni))
            ->descriptionIcon($artikelDescriptionIcon, 'before')    
            // ->descriptionColor($artikelBulanIni > $artikelBulanKemarin ? 'success' : 'danger')
            // ->iconColor('danger')
            ->color('danger')
            
            ->chart($paketChartData),
        ];
    }
    protected function getMonthlyPendaftaranCounts($model): array
    {
        $now = Carbon::now();

        $counts = [];
        for ($i = 0; $i < 6; $i++) {
            $startOfMonth = $now->copy()->subMonths($i)->startOfMonth();
            $endOfMonth = $now->copy()->subMonths($i)->endOfMonth();

            if($model == 'artikel'){
                $count = Artikel::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();    
            } else if($model == 'pendaftaran'){
                $count = Pendaftaran::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
            } else if($model == 'paket'){
                $count = Paket::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
            }
            $counts[] = $count;
        }
        return array_reverse($counts);
    }
}
