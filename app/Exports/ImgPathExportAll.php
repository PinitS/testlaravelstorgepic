<?php

namespace App\Exports;

use App\Models\ImgPath;
use Maatwebsite\Excel\Concerns\FromCollection;

class ImgPathExportAll implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ImgPath::all();
    }
}
