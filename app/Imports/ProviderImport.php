<?php

namespace App\Imports;

use App\Models\Provider;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;//Expecificamos la cantida  de registros k nos traera de 100 en 100
use Maatwebsite\Excel\Concerns\WithHeadingRow;//para leer las cabeceras del excel
use Maatwebsite\Excel\Concerns\WithChunkReading;//reduce la carga de trabajo
use Maatwebsite\Excel\Concerns\WithValidation; // validacion de los valores del excel

class ProviderImport implements ToModel,WithHeadingRow,WithBatchInserts,WithChunkReading,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Provider([
            'nombre'=>$row['nombre'],
            'encargado'=>$row['encargado'],
            'ubicacion'=>$row['ubicacion'],
            'telefono'=>$row['telefono'],
        ]);
    }

    public function batchSize():int{        
        return 100;
    }
    public function chunkSize():int{        
        return 100;
    }
    public function rules(): array
    {
        return [
             // Above is alias for as it always validates in batches
             '*.nombre' => ['required'],
             '*.encargado' => ['required'],
             '*.ubicacion' => ['required'],
             '*.telefono' => ['required']
        ];
    }
}