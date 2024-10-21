<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Author;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ArticleOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Artikel', Article::count()),
            Stat::make('Jumlah Author', Author::count()),
            Stat::make('Jumlah User', User::count()),
        ];
    }
}
