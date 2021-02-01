<?php
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\StudentController;
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





Route::get('create', [StudentController::class, 'create'])-> name('student');
Route::post('store', [StudentController::class, 'store'])-> name('student_details');
Route::get('index', [StudentController::class, 'index'])-> name('student_list');
Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::put('update', [StudentController::class, 'update'])->name('update');
Route::delete('destroy/{id}', [StudentController::class, 'destroy'])->name('destroy');





Route::group(['prefix' => 'employes', 'as' => 'employes.'],
function (){
    Route::get('index',[EmployeController::class,'index'])->name('index');
    Route::get('create',[EmployeController::class,'create'])->name('create');
    Route::post('store',[EmployeController::class,'store'])->name('store');
    Route::put('update',[EmployeController::class,'update'])->name('update');
    Route::delete('destroy',[EmployeController::class,'destroy'])->name('destroy');
    Route::get('show',[EmployeController::class,'show'])->name('show');
    Route::get('edit',[EmployeController::class,'edit'])->name('edit');

});