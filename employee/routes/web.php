<?php
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExampleController;
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
Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/', function () {
    return view('welcome');

});
Route::get('/praba', function () {
    return 'Hello reeshma';
});

Route::get('/user', [EmployeeController::class, 'myfunction']);
Route::get('/users', [EmployeeController::class, 'myfunction']);
Route::get('users1', [EmployeeController::class, 'myfunction1'])-> name('student_details1');
Route::post('users1', [EmployeeController::class, 'addData'])->name('student');
Route::post('store', [EmployeeController::class, 'myfunction2']) -> name('student_details');
Route::get('/nestedView', [EmployeeController::class, 'myfunction3']);
Route::get('/nestedView1', [EmployeeController::class, 'myfunction4']);
Route::get('/nestedView2', [EmployeeController::class, 'myfunction5']);
Route::get('/nestedView3', [EmployeeController::class, 'myfunction6']);
Route::get('/nestedView4', [EmployeeController::class, 'myfunction7']);

Route::get('users2', [EmployeeController::class, 'list'])->name('list');
//Route::get('users3', [EmployeeController::class, 'list1'])->name('list');





Route::get('form', [ExampleController::class, 'show'])-> name('student');
Route::post('form', [ExampleController::class, 'create'])-> name('student_details');
Route::get('form1', [ExampleController::class, 'index'])-> name('student_list');