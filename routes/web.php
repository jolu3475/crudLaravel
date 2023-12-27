<?php

use App\Http\Controllers\userStatus;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [userStatus::class, 'index'])->name('tdl.index');
Route::get('/test/create', [userStatus::class, 'create'])->name('tdl.create');
Route::post('/test', [userStatus::class, 'newTask'])->name('tdl.newTask');
Route::get('/test/edit/{todo}', [userStatus::class, 'edit'])->name('tdl.edit');
Route::put('/test/update/{todo}', [userStatus::class, 'update'])->name('tdl.update');
Route::get('/test/finish/{todo}', [userStatus::class, 'finish'])->name('tdl.finish');
Route::put('/test/finished/{todo}', [userStatus::class, 'finished'])->name('tdl.finished');
Route::delete('/test/destroy/{todo}', [userStatus::class, 'destroy'])->name('tdl.destroy');
