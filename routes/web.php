<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VehicalController;
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