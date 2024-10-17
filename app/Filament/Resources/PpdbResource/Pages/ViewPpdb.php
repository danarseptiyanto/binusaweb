<?php

namespace App\Filament\Resources\PpdbResource\Pages;

use Faker\Provider\ar_EG\Text;
use Filament\Actions\EditAction;
use Filament\Infolists\Infolist;
use Filament\Actions\DeleteAction;
use Filament\Infolists\Components\Grid;
use App\Filament\Resources\PpdbResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;

class ViewPpdb extends ViewRecord
{
    protected static string $resource = PpdbResource::class;


    public function getTitle(): string
    {
        return $this->record->nama;
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Informasi Pendaftar')
                    ->icon('heroicon-o-user')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextEntry::make('nama')
                                    ->label('Nama Siswa')
                                    ->size('lg')
                                    ->weight('semibold'),
                                TextEntry::make('asal-sekolah')
                                    ->label('Asal Sekolah')
                                    ->size('lg')
                                    ->weight('semibold'),
                                TextEntry::make('wa-ortu')
                                    ->label('WhatsApp Orang Tua')
                                    ->size('lg')
                                    ->weight('semibold'),
                                TextEntry::make('wa-siswa')
                                    ->label('WhatsApp Siswa')
                                    ->size('lg')
                                    ->weight('semibold'),
                                TextEntry::make('tpt-lahir')
                                    ->label('Tempat Lahir')
                                    ->size('lg')
                                    ->weight('semibold'),
                                TextEntry::make('tgl-lahir')
                                    ->label('Tanggal Lahir')
                                    ->size('lg')
                                    ->weight('semibold'),
                                TextEntry::make('ibu')
                                    ->label('Nama Ibu')
                                    ->size('lg')
                                    ->weight('semibold'),
                                TextEntry::make('ayah')
                                    ->label('Nama Ayah')
                                    ->size('lg')
                                    ->weight('semibold'),
                                TextEntry::make('alamat')
                                    ->label('Alamat')
                                    ->size('lg')
                                    ->weight('semibold'),
                            ]),
                    ])
                    ->collapsible(),

                Section::make('Informasi Tambahan')
                    ->icon('heroicon-o-clipboard')
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Registration Date')
                            ->size('lg')
                            ->weight('semibold')
                            ->dateTime('F j, Y'),
                    ])
                    ->collapsible(),
            ]);
    }
}
