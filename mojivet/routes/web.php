<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AppointmentController;
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
Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

route::get('/',[TemplateController::class,'index']);
// routes/web.php

Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');

Route::get('/create-appointment', [AppointmentController::class, 'create'])->name('create-appointment');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/list', [AppointmentController::class, 'index'])->name('home');
