<?php
  
use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\BookingController;

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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::post('/getdataBooking', [BookingController::class, 'getdataBooking']);

Route::get('/newPatientForm/{id}', [BookingController::class, 'newPatientForm']);

Route::post('/print', [BookingController::class, 'print']);


Route::post('/createNewPatient', [BookingController::class, 'createNewPatient']);
Route::get('/getToken', [BookingController::class, 'getToken']);



 