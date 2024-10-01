<?php
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;
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
    return view('layout.master');
});

Route::get('siswa/tampil',function(){
        return view('siswa.tampil');
});

Route::get('/siswa',[SiswaController::class, 'tampil'])->name('siswa.tampil');
Route::get('siswa/tambah',[SiswaController::class, 'tambah'])->name('siswa.tambah');
Route::post('siswa/submit',[SiswaController::class, 'submit'])->name('siswa.submit');
Route::get('siswa/edit/{id}',[SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('siswa/update/{id}',[SiswaController::class, 'update'])->name('siswa.update');
Route::get('siswa/delete/{id}',[SiswaController::class, 'delete'])->name('siswa.delete');

Route::get('siswa/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('register/store', [RegisterController::class, 'store'])->name('register.store');


Route::get('siswa/login', [LoginController::class, 'index'])->name('login.index');
Route::post('siswa/login', [LoginController::class,'check_login'])->name('login.check_login');

Route::get('/logout', [LoginController::class, 'logout'])->name('dashboard.logout');