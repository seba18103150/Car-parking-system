<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VehicalController;
// use App\Http\Controllers\ParkingVehical;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/admin',[AdminController::class,'test']);
Route::get('admin/vehical',[VehicalController::class,'vehical'])->name('admin.vehical');

Route::get('/admin/addvehical',[VehicalController::class,'addvehical'])->name('vehical.addvehical');
Route::post('/vehical/add',[VehicalController::class,'add'])->name('vehical.add');


// vehical type

Route::get('/admin/vehicaltype',[VehicalController::class,'vehicaltype'])->name('admin.vehical.type');

Route::get('/admin/vehicaltypeform',[VehicalController::class,'vehicaltypeform'])->name('admin.vehical.typeform');
Route::post('/admin/vehicaltype',[VehicalController::class,'vehicalstore'])->name('admin.vehical.store');




// parkingslot 
Route::get('/parkingslot',[VehicalController::class,'slot'])->name('vehical.parkingslot');
Route::get('/parkingslot/delete/{id}',[VehicalController::class,'parkingslotDelete'])->name('vehical.parkingslot.delete');
Route::get('/vehical/selectslot',[VehicalController::class,'selectslot'])->name('vehical.selectslot.form');
Route::post('/vehical/parkingslots',[VehicalController::class,'addparkingslots'])->name('vehical.selectslot.add');

//parking slot edit/update
Route::get('/parkingslot/edit/{id}',[VehicalController::class,'parkingslotedit'])->name('vehical.parkingslot.edit');
Route::PUT('/parkingslot/update/{id}',[VehicalController::class,'parkingslotupdate'])->name('vehical.parkingslot.update');

Route::get('/dashboard',[VehicalController::class,'dashboard'])->name('vehical.dashboard');
//checkout
Route::get('/parkingslot/out/{id}',[VehicalController::class,'parkingout'])->name('vehical.parking.out');
Route::PUT('/parkingout/update/{id}',[VehicalController::class,'parkingoutupdate'])->name('vehical.parkingout.update');

Route::get('/parking/delete/{id}',[VehicalController::class,'parkingDelete'])->name('vehical.parking.delete');


Route::get('/parkingslot/new/parking',[VehicalController::class,'newparking'])->name('vehical.parking.new');

Route::post('/vehical/parkingout form',[VehicalController::class,'checkout'])->name('vehical.ckeckout.payment');




