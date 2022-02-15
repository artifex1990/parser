<?php

namespace App\Imports;

use App\Models\Akticom;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithUpserts;

class AkticomsImport implements ToModel, WithCustomCsvSettings, WithBatchInserts, WithChunkReading, WithUpserts
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (isset($row[0]) && $row[0] == 'Код') {
            return null;
        }

        return new Akticom([
            'code'              => $row[0],
            'name'              => $row[1],
            'level_1'           => $row[2],
            'level_2'           => $row[3],
            'level_3'           => $row[4],
            'price'             => ((float)str_replace(['"', ' '], '', $row[5])),
            'price_sp'          => ((float)str_replace(['"', ' '], '', $row[6])),
            'count'             => (int)str_replace([',', '"'], '', $row[7]),
            'field_properties'  => (int)str_replace([',', '"'], '', $row[8]),
            'joint_shopping'    => $row[9],
            'unit_measure'      => $row[10],
            'image'             => $row[11],
            'view_main'         => (boolean)str_replace([',', '"'], '', $row[12]),
            'description'       => $row[13],
        ]);
    }

    public function batchSize(): int
    {
        return 10;
    }

    public function chunkSize(): int
    {
        return 10;
    }

    /**
     * @return string|array
     */
    public function uniqueBy()
    {
        return 'code';
    }

    public function getCsvSettings(): array
    {
        return [ 
            'delimiter' => ';',
        ];
    }
}
