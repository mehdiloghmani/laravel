<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clipcontroller;
use App\Http\Controllers\indexcontroller;

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
route::get('/',[indexcontroller::class , 'index'])->name('index');

route::get('/clips/create',[clipcontroller::class,'create'])->name('clips.create');

route::post('/clips', [clipcontroller::class, 'store'])->name('clips.store');

route::get('/clips/{clip}' , [clipcontroller::class, 'show'])->name('clips.show');

route::get('/clips/{clip}/edit' , [clipcontroller::class , 'edit'])->name('clips.edit');

route::post('/clips/{clip}' , [clipcontroller::class , 'update'])->name('clips.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
