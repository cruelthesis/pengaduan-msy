<?php

use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
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

// Route::get('/', function () {
//     return view('');
// });

Route::get('/', [MasyarakatController::class, 'index']);
Route::get('login/masyarakat', [MasyarakatController::class, 'pagelogin']);
Route::get('register/masyarakat', [MasyarakatController::class, 'register']);
Route::post('postregis/masyarakat', [MasyarakatController::class, 'postregis']);
Route::post('postlogin/masyarakat', [MasyarakatController::class, 'postlogin']);
Route::get('logout/masyarakat', [MasyarakatController::class, 'logout']);

Route::get('lapor/masyarakat', [MasyarakatController::class, 'pengaduan']);
Route::post('kirimpengaduan/masyarakat', [PengaduanController::class,'store']);
Route::get('historipengaduan/masyarakat', [PengaduanController::class, 'index']);
Route::get('detailpengaduan/masyarakat/{id}', [PengaduanController::class, 'show']);

Route::get('dashboard/petugas', [PetugasController::class, 'index']);
Route::get('login/petugas', [PetugasController::class, 'pagelogin']);
Route::get('regispetugas', [PetugasController::class, 'listpetugas']);



