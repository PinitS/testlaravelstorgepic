<?php

namespace App\Http\Controllers;

use App\Exports\ImgPathExportAll;
use App\Models\ImgPath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

use App\Exports\ImgPathExport;
use Maatwebsite\Excel\Facades\Excel;

class ImgPathController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('path');

        if($file == null)
        {
            $data = [
                'type' => 'error',
                'text' => 'upload fails',
            ];
            return redirect('/')->with(['data' => $data]);
        }
        $filename = $file->hashName('uploads/');
        $file->move('uploads', $filename);

        $path = $filename;

        $img = Image::make($path);
        $img->resize(50, 50, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save();

        $item = new ImgPath;
        $item->path = $filename;

        if($item->save())
        {
            $data = [
                'type' => 'success',
                'text' => 'upload success fully',
            ];
        }
        else
        {
            $data = [
                'type' => 'error',
                'text' => 'upload fails',
            ];
        }


        return redirect('/')->with(['data' => $data]);
//        return Redirect::route('upload')->with( ['data' => "assssssasdasd"] );
//        return redirect('/view' , 'status' => 'errors');
    }

    public function viewImg()
    {
        $path = ImgPath::get();
        return response()->json(['status' => true, 'path' => $path]);
    }

    public function exportFilterExcel($id)
    {
        return Excel::download(new ImgPathExport($id), 'filter.xlsx');
    }

    public function exportAllExcel()
    {
        return Excel::download(new ImgPathExportAll(), 'All.xlsx');
    }
}
