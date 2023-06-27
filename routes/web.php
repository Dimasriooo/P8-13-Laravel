<?php

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
    return view('welcome');
});


Route::get('/about', function () {
    return view('About');
});



Route::get('/hello/{nama}/{alamat}', function ($nama, $alamat) {
    return "<h2> hello $nama dari $alamat</h2>";
});


Route::get('/produk/{id}', function ($id) {
    return view('produk/index', ['id'=>$id]);
});

use App\Http\Controllers\UserController;

Route::get('/user', 
     [usercontroller::class, 'index']);

Route::get('/user/daftar', 
     [usercontroller::class, 'daftar']);

Route::post('/user/store', 
     [UserController::class, 'store'])->name('user/store');



// P9
use App\Http\Controllers\P9Controller;

Route::get('P9/index',
    [P9Controller::class, 'index']);

Route::post('P9/bayar',
    [P9Controller::class, 'bayar'])->name('P9/bayar');


//P10
use App\Http\Controllers\TokoController;

Route::prefix('toko')->Group(function(){
    
     Route::get('/', 
     [TokoController::class, 'index']);

     Route::get('/produk', 
     [Tokocontroller::class, 'index']);

     Route::get('/profile', 
     [Tokocontroller::class, 'index']);

     Route::get('/detail', 
     [Tokocontroller::class, 'detail']);


     //P13
     route::group(['middleware'=>['auth']], function(){
         //P11
        Route::get('/admin', 
     [Tokocontroller::class, 'admin'])->name('produk.admin');

     });
      //TUGAS P11
     Route::get('/customer',
     [TokoController::class, 'customer'])->name('customer.create');
     // Tugas p12
     Route::post(
        '/c',
        [TokoController::class, 'storec']
    )->name('customer.store');

    Route::get(
        '/{customer}/editc',
        [TokoController::class, 'editc']
    )->name('customer.edit');

    Route::delete(
        '/{customer}/c',
        [TokoController::class, 'destroyc']
    )->name('customer.destroy');

    Route::put(
        '/{customer}/c',
        [TokoController::class, 'updatec']
    )->name('customer.update');

     Route::get('/about', 
     [Tokocontroller::class, 'about']);

     
     // P12
     route::get('create', 
      [Tokocontroller::class, 'create'])->name('produk.create');

    route::post('/', 
      [Tokocontroller::class, 'store'])->name('produk.store');

    Route::get('/{product}/edit' ,
        [TokoController::class, 'edit'])->name('produk.edit');
    
    Route::delete('/{product}' ,
        [TokoController::class, 'destroy'])->name('produk.destroy');

    Route::put('/{product}' ,
        [TokoController::class, 'update'])->name('produk.update');

     
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
