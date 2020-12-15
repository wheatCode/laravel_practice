<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Imports\ExcelsImport;

class ExcelController extends Controller
{
//Excel檔案匯入功能 By Laravel學院
public function import(Request $request){
    Excel::import(new ExcelsImport, request()->file('file'));

    return 1;
    // $filePath = 'storage/exports/'.iconv('UTF-8', 'GBK', '學生成績').'.xls';
    // Excel::load($filePath, function($reader) {
    //     $data = $reader->all();
    //     dd($data);
    // });
    }

public function excel(){
    return view('pages.excel',['file'=>'']);
}
}   
