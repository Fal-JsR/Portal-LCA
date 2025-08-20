<?php

namespace App\Exports;

use App\Models\RecordMaintenance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class RecordMaintenanceExport implements FromCollection, WithHeadings, WithDrawings
{
    protected $records;
    protected $drawings = [];

    public function __construct($records)
    {
        $this->records = $records;
    }

    public function collection()
    {
        $rows = [];
        foreach ($this->records as $index => $record) {
            $gambarArr = json_decode($record->gambar, true) ?? [];
            // Siapkan 5 kolom gambar
            $gambarCells = array_fill(0, 5, '');
            foreach ($gambarArr as $i => $img) {
                if ($i < 5) {
                    $gambarCells[$i] = ''; // cell akan diisi oleh drawing
                    $gambarPath = public_path('storage/' . $img);
                    if (file_exists($gambarPath)) {
                        $drawing = new Drawing();
                        $drawing->setName('Gambar ' . ($i + 1));
                        $drawing->setPath($gambarPath);
                        $drawing->setHeight(80);
                        // Kolom gambar: J, K, L, M, N (10-14), baris $index+2
                        $col = chr(74 + $i); // 74 = 'J'
                        $drawing->setCoordinates($col . ($index + 2));
                        $this->drawings[] = $drawing;
                    }
                }
            }
            $rows[] = [
                $record->nama,
                $record->tanggal,
                $record->instansi->nama_instansi ?? '',
                $record->nama_perusahaan_tambahan,
                $record->keluhan,
                $record->status,
                $record->keterangan_progress,
                $record->kebutuhan_perangkat,
                $record->jenis,
                ...$gambarCells // Gambar 1-5
            ];
        }
        return collect($rows);
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Tanggal',
            'Nama Perusahaan',
            'Nama Perusahaan Tambahan',
            'Keluhan/Kendala',
            'Status Pekerjaan',
            'Keterangan Progress/Pending',
            'Kebutuhan Perangkat',
            'Jenis',
            'Gambar 1',
            'Gambar 2',
            'Gambar 3',
            'Gambar 4',
            'Gambar 5',
        ];
    }

    public function drawings()
    {
        return $this->drawings;
    }
}
