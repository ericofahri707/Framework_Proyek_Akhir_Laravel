<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\HomeController;



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

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');

//Route::get('/dashboard', function () {
  //  return view('layouts.index');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::resource('/mahasiswa', MahasiswaController::class, )->middleware('auth');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('create')->middleware('auth');
Route::post('store-mahasiswa', [MahasiswaController::class, 'store'])->middleware('auth');
Route::get('/read/{nim}', [MahasiswaController::class, 'read'])->name('read')->middleware('auth');
Route::post('/update/{nim}', [MahasiswaController::class, 'update'])->name('update')->middleware('auth');
Route::get('/delete/{nim}', [MahasiswaController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('mahasiswa/edit', [MahasiswaController::class, 'edit'])->name('edit')->middleware('auth');

require __DIR__.'/auth.php';
Route::resource('/dosen', DosenController::class, )->middleware('auth');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('create')->middleware('auth');
Route::post('store-dosen', [DosenController::class, 'store'])->middleware('auth');
Route::get('dosen/read/{nip}', [DosenController::class, 'read'])->name('read')->middleware('auth');
Route::post('/update/{nip}', [DosenController::class, 'update'])->name('update')->middleware('auth');
Route::get('dosen/delete/{nip}', [DosenController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('dosen/edit', [DosenController::class, 'edit'])->name('edit')->middleware('auth');

require __DIR__.'/auth.php';
Route::resource('/matakuliah', MatakuliahController::class, )->middleware('auth');
Route::get('matakuliah/create', [MatakuliahController::class, 'create'])->name('create')->middleware('auth');
Route::post('store-matakuliah', [MatakuliahController::class, 'store'])->middleware('auth');
Route::get('matakuliah/read/{id}', [MatakuliahController::class, 'read'])->name('read')->middleware('auth');
Route::post('/update/{id}', [MatakuliahController::class, 'update'])->name('update')->middleware('auth');
Route::get('matakuliah/delete/{id}', [MatakuliahController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/edit', [MatakuliahController::class, 'edit'])->name('edit')->middleware('auth');

require __DIR__.'/auth.php';
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');


Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);