<?php

namespace App\Exports;

use App\Models\Ppdb;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PpdbExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        static $number = 1;
        return Ppdb::select($number++, 'nama', 'wa-ortu', 'wa-siswa', 'asal-sekolah', 'tpt-lahir', 'tgl-lahir', 'ibu', 'ayah', 'alamat')->get();
    }

    public function headings(): array
    {
        return [
            'No',
            'Name',
            'WA Ortu',
            'WA Siswa',
            'SMP',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Ibu',
            'Ayah',
            'Alamat'
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,   // Column "No."
            'B' => 10,  // Column "ID"
            'C' => 20,  // Column "Name"
            'D' => 30,  // Column "Email"
            // Set other column widths as necessary
        ];
    }
}
