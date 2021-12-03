<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AdminController;

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
Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('/', [BarangController::class, 'index'] );

Route::get('/about', [BarangController::class, 'about']
);
Route::get('/menu', [BarangController::class, 'tampilkan'] );
Route::post('/menu', [BarangController::class, 'chat'] );

Route::get('/contact', function () {
    return view('contact');
});

Route::get('login', [AdminController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [AdminController::class, 'authenticate']);


Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', [BarangController::class, 'dashboard']);
    Route::get('/dashtipe', [BarangController::class, 'dashtipe']);

    Route::get('/dashform', [BarangController::class, 'dashform']);
    Route::post('/dashform', [BarangController::class, 'inputform']);

    Route::get('/dashformseo', [BarangController::class, 'dashformseo']);
    Route::post('/dashinseo', [BarangController::class, 'inputformseo']);

    Route::get('/dashformabout', [BarangController::class, 'dashformabout']);
    Route::post('/dashinabout', [BarangController::class, 'inputformabout']);

    Route::get('/dashformTipe', [BarangController::class, 'dashformTipe']);
    Route::post('/dashformTipe', [BarangController::class, 'inputformTipe']);

    Route::get('/delete/{id}', [BarangController::class, 'delete']);
    Route::get('/deleteTipe/{id}', [BarangController::class, 'deleteTipe']);

    Route::post('/dashedit/', [BarangController::class, 'dedit']);
    Route::post('/dashledit/', [BarangController::class, 'ledit']);

    Route::post('/dasheditTipe/', [BarangController::class, 'deditTipe']);
    Route::post('/dashleditTipe/', [BarangController::class, 'leditTipe']);

    Route::get('logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('register', [AdminController::class, 'form']);
    Route::post('register', [AdminController::class, 'store']);
});