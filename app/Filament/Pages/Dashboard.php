<?php

namespace App\Filament\Pages;

use Filament\Pages\BasePage;
use App\Filament\Widgets\PostsChart;

class Dashboard extends BasePage
{
    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected function getWidgets(): array
    {
        return [
        PostsChart::class,
        ];
    }
}
