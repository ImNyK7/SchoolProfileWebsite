<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DatasekolahController;
use App\Http\Controllers\DestroyController;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/jurusan', function () {
    return view('jurusan');
});

Route::get('/kontak', function () {
    return view('kontak');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')-> middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/datasekolah', function(){
    return view('datasekolah.index'); 
})->middleware('auth');

Route::resource('/datasekolah/datasiswa', DatasekolahController::class)->middleware('auth');