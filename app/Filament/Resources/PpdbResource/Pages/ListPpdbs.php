<?php

namespace App\Filament\Resources\PpdbResource\Pages;

use Filament\Actions;
use App\Exports\PpdbExport;
use Filament\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use App\Filament\Resources\PpdbResource;
use Filament\Resources\Pages\ListRecords;

class ListPpdbs extends ListRecords
{
    protected static string $resource = PpdbResource::class;

    protected ?string $heading = 'Pendaftar PPDB';


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('export')
                ->label('Export to Excel')
                ->action(fn() => Excel::download(new PpdbExport(), 'PPDB.xlsx')),
        ];
    }
}
