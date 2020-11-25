<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/blog_list', function () {
    return view('pages.blog_list');
});

Route::get('/blog_single', function () {
    return view('pages.blog_single');
});

Route::get('/excel', [ExcelController::class, 'excel']);
Route::post('/excel', [ExcelController::class, 'import']);
