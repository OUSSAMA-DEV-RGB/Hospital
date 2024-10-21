<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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



Route::get('/' , [HomeController::class , 'index']);
Route::get('/home' , [HomeController::class , 'redirect']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 // route to add doctors :  

 Route::get('/add_doctor_view' , [AdminController::class , 'addview'])->name('add_doctor_view');
 Route::post('/upload_doctor' , [AdminController::class , 'upload'])->name('upload');
 Route::post('/appointment' , [HomeController::class , 'appointment'])->name('appointment');
 Route::get('/myappointment' , [HomeController::class , 'myappointment'])->name('myappointment');
 Route::get('/cancel_appoint/{id}' , [HomeController::class , 'cancel_appoint'])->name('cancel_appoint');
 Route::get('/showappointment' , [AdminController::class , 'showappointment'])->name('showappointment');
 Route::get('/approved/{id}' , [AdminController::class , 'approved'])->name('approved');
 Route::get('/canceled/{id}' , [AdminController::class , 'canceled'])->name('canceled');
