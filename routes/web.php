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
Route::get('/device-resume', [MachineController::class, 'device_resume'])->name('machine.deviceresume');
Route::get('/device-settime', [MachineController::class, 'device_settime'])->name('machine.devicesettime');
Route::get('/device-setuser', [MachineController::class, 'device_setuser'])->name('machine.devicesetuser');
Route::get('/device-clearuser-all', [MachineController::class, 'device_clearuser_all'])->name('machine.deviceclearuserall');
Route::get('/device-clearuser-single', [MachineController::class, 'device_clearuser_single'])->name('machine.deviceclearusersingle');
// Route::get('/', function () {
//     return view('welcome');
// });
