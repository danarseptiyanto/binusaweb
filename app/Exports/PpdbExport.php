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
        return Ppdb::select('id', 'name', 'email')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
        ];
    }
}
