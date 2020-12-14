<?php

namespace App\Exports;

use App\Models\ImgPath;
use Maatwebsite\Excel\Concerns\FromQuery;

class ImgPathExport implements FromQuery
{
    public function __construct(int $id)
    {
        $this->image_id = $id;
    }

    /**
     * @return \Illuminate\Support\Collection
     */

    public function query()
    {
        return ImgPath::query()->where('id', $this->image_id);
    }
}
