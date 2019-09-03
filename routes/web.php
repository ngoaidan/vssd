<?php
use Illuminate\Http\Request;
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
    $dv = DB::select('select * from dv where 1');
    return view('home', ['dvs' => $dv]);
});

Route::get('/{alias}', function ($alias) {
    $content = DB::select('select * from dv where alias = :alias', ['alias' => $alias]);
    if(!$content){
    	// return "<center> Không tìm thấy trang. </center>";
    	return view('errors.503');
    }
    $dv = DB::select('select * from dv where 1');
    return view('dichvu', ['dvs' => $dv, 'content' => $content]);
});
