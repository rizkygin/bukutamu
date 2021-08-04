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

https://localhost:8000/
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mencoba', function (){
    return view('mencoba');
});

Route::get('/',[App\Http\Controllers\HomeController::class, 'login'])
->name('welcome');

Route::get('/tamu/presensi',
[App\Http\Controllers\BukuTamuController::class, 
'create'])->name('absen_tamu');

Route::post('/tamu/absen',
[App\Http\Controllers\BukuTamuController::class,
 'store'])->name('tamu_submit');


 Route::get('/tamu/edito/{id}',
 [App\Http\Controllers\BukuTamuController::class,
  'edit'])->name('tamu_edit')->middleware('hanya_admin');

  Route::post('/tamu/edito/{id}',
  [App\Http\Controllers\BukuTamuController::class,
   'update'])->name('update_tamu');

// Route::post('/tamu/hapus/{id}',
// [App\Http\Controllers\BukuTamuController::class,
//    'destroy'])->name('hapus_tamu');

Route::get('/tamu/hapus/{id}',
[App\Http\Controllers\BukuTamuController::class,
   'destroy'])->name('hapus_tamu')->middleware('hanya_rizky');

   Route::get('/forbid',function(){
    return view('forbidden');
   })->name('forbid');

   Route::get('/dilarang',function(){
    return "kamu tidak diperbolehkan";
   })->name('larangan');