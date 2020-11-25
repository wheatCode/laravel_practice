<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
//Excel檔案匯入功能 By Laravel學院
public function import(Request $request){

    return redirect()->route('excel');
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
