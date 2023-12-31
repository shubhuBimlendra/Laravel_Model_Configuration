<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AddressController;

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

Route::get('/add',[ StudentController::class, 'addStudent'])->name('add.student');
Route::post('/storestudent',[ StudentController::class, 'storeStudent'])->name('student.store');
Route::get('/students',[ StudentController::class, 'index']);
Route::get('/students/{id}',[ StudentController::class, 'show']);

Route::get('/addaddress',[ AddressController::class, 'addAddress'])->name('add.address');
Route::post('/storeaddress',[ AddressController::class, 'storeAddress'])->name('address.store');
Route::get('/studentdetails',[ AddressController::class, 'index']);
