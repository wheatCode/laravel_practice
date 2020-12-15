<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Imports\ExcelsImport;

=======

use App\Models\Excel as Excel1;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
>>>>>>> 3d43caa419c9845ef59e304cb37d375cffc56f8e
class ExcelController extends Controller
{
//Excel檔案匯入功能 By Laravel學院
public function import(Request $request){
<<<<<<< HEAD
    Excel::import(new ExcelsImport, request()->file('file'));

    return 1;
    // $filePath = 'storage/exports/'.iconv('UTF-8', 'GBK', '學生成績').'.xls';
    // Excel::load($filePath, function($reader) {
    //     $data = $reader->all();
    //     dd($data);
    // });
=======
    $files = $request->file('file');
    foreach($files as $file){
        Excel::import(new UsersImport,$file);
    }

    return view('pages.excel',['files'=>Excel1::all()]);
>>>>>>> 3d43caa419c9845ef59e304cb37d375cffc56f8e
    }

public function excel(){
    return view('pages.excel',['files'=>Excel1::all()]);
}
}   
