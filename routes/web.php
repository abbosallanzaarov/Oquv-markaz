<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursCantroller;
use App\Http\Controllers\MentCantroller;
use App\Http\Controllers\nCantroller;
use App\Http\Controllers\PersonCantroller;
use App\Http\Controllers\TestCantroller;


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
  Route::get('admin/dash' , [\App\Http\Controllers\dashCantroller::class , 'index'])->name('admin.dash');
Route::get('/', function () {
    return view('welcome');
   
});

Route::resource('kurs' , KursCantroller::class)->names('kurs');

//Route::resource('mentor' , MentorCantroller::class)->names('mentor');

//Route::resource('mentor', WentorCantroller::class)->names('mentor');
Route::resource('mentor' , MentCantroller::class)->names('mentor');

 // Route::get('mentor/show' , [nCantroller::class , 'full'])->name('mentor.show.s');
 Route::resource('person' , PersonCantroller::class)->names('pers');
 Route::delete('person/{id}/des' , [TestCantroller::class , 'ReSTdestroy'])->name('dest.del');















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
