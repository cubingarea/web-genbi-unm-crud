<?php

namespace App\Filament\Widgets;

use App\Models\alumni;
use App\Models\kontakpengurus;
use App\Filament\Resources\AlumniResource;
use App\Models\berita;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use function Filament\Forms\Components\MorphToSelect\label;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalKontakPengurus = kontakpengurus::count();
        $totalAlumni = alumni::count();
        $totalBerita = berita::count();

        return [
            Card::make('Total Alumni', $totalAlumni)
                ->icon('heroicon-o-academic-cap'),
            Card::make('Total Berita', $totalBerita)
                ->icon('heroicon-o-newspaper'),
            Card::make('Total Kontak Pengurus', $totalKontakPengurus)
                ->icon('heroicon-o-user-group'),
        ];
    }
}
