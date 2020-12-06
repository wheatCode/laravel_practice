<?php

namespace App\Http\Controllers;

use App\Models\Excel as Excel1;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
class ExcelController extends Controller
{
//Excel檔案匯入功能 By Laravel學院
public function import(Request $request){
    $files = $request->file('file');
    foreach($files as $file){
        Excel::import(new UsersImport,$file);
    }

    return view('pages.excel',['files'=>Excel1::all()]);
    }

public function excel(){
    return view('pages.excel',['files'=>Excel1::all()]);
}
}   
