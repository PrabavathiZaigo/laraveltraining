<?php


use App\Http\Controllers\ProductController;
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
    return view('welcome');
});


Route::group(['prefix' => 'products', 'as' => 'products.'],
function (){
    Route::get('index',[ProductController::class,'index'])->name('index');
    Route::get('create',[ProductController::class,'create'])->name('create');
    Route::post('store',[ProductController::class,'store'])->name('store');
    Route::put('update',[ProductController::class,'update'])->name('update');
    Route::delete('destroy/{id}',[ProductController::class,'destroy'])->name('destroy');
    Route::get('show',[ProductController::class,'show'])->name('show');
    Route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');

});

Route::get('manager',[ProductController::class,'manager'])->name('manager');
Route::get('customer',[ProductController::class,'customer'])->name('customer');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
