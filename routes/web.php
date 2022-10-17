<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('coba', function(){
    return "Halloo :Kakk";
});

//Array json
Route::get('coba1', function(){
    return ['rapli', 'jeje', 'juju'];
});

//json objek
Route::get('coba2', function(){
    return[
        'Nama' => "Muhammad Agi",
        'Kelas' => "XII RPL 4",
        'Nis' => 3103120140
    ];
});

//objek json, ubah status kode
Route::get('coba3', function(){
    return response()->json(
        [
            'Nama' => "Muhammad Agi",
            'Kelas' => "XII RPL 4",
            'Nis' => 3103120140
        ], 201
    );
});