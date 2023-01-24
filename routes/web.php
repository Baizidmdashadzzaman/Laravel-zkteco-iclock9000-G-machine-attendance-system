<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MachineController;
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

 
Route::get('/', [MachineController::class, 'index'])->name('machine.home');
Route::get('/test-sound', [MachineController::class, 'test_sound'])->name('machine.testsound');
Route::get('/device-information', [MachineController::class, 'device_information'])->name('machine.deviceinformation');
Route::get('/device-data', [MachineController::class, 'device_data'])->name('machine.devicedata');
Route::get('/device-data/clear-attendance', [MachineController::class, 'device_data_clear_attendance'])->name('machine.devicedata.clear.attendance');
Route::get('/device-restart', [MachineController::class, 'device_restart'])->name('machine.devicerestart');
Route::get('/device-shutdown', [MachineController::class, 'device_shutdown'])->name('machine.deviceshutdown');
Route::get('/device-sleep', [MachineController::class, 'device_sleep'])->name('machine.devicesleep');
Route::get('/device-resume', [MachineController::class, 'device_resume'])->name('machine.deviceresume');
Route::get('/device-settime', [MachineController::class, 'device_settime'])->name('machine.devicesettime');

Route::post('/device-setip', [MachineController::class, 'device_setip'])->name('machine.devicesetip');
Route::get('/device-adduser', [MachineController::class, 'device_adduser'])->name('machine.deviceadduser');
Route::post('/device-setuser', [MachineController::class, 'device_setuser'])->name('machine.devicesetuser');
Route::get('/device-removeuser-all', [MachineController::class, 'device_removeuser_all'])->name('machine.deviceremoveuserall');
Route::get('/device-removeuser-single/{id}', [MachineController::class, 'device_removeuser_single'])->name('machine.deviceremoveusersingle');
Route::get('/device-viewuser-single/[id]', [MachineController::class, 'device_viewuser_single'])->name('machine.deviceviewusersingle');
// Route::get('/', function () {
//     return view('welcome');
// });
