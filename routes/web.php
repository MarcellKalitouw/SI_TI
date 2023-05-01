<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    MahasiswaController,
    DosenController,
    DashboardController,
    KegiatanController,
    ProfilController,
    TentangController,
    LoginController,
    PenggunaController,
    LandingPageController
};
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

// Route::get('/', function () {
//     // return view('admin.layouts', ['title' => 'dashboard', 'page' => 'dashboard']);

// });

Route::get('/', [LandingPageController::class, 'home'])->name('home');

Route::resource('dashboard', DashboardController::class);

Route::resource('data-mahasiswa', MahasiswaController::class);
Route::resource('data-kegiatan', KegiatanController::class);
Route::resource('data-dosen', DosenController::class);
Route::resource('data-profil', ProfilController::class);
Route::resource('data-tentang', TentangController::class);
Route::resource('data-pengguna', PenggunaController::class);

Route::get('page-login', [LoginController::class, 'index'] )->name('login.index');
Route::post('post-login', [LoginController::class, 'post'] )->name('login.post');