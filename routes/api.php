<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\ResultsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', function(){
	return "API Works.";
});

Route::resource('results', ResultsController::class);
Route::get('/results/search/{code}', [ResultsController::class, 'search']);

Route::resource('semesters', SemesterController::class);
Route::get('/semesters/search/{code}', [SemesterController::class, 'search']);

Route::resource('instructors', StudentController::class);

Route::resource('students', StudentController::class);
Route::get('/students/search/{registration_id}', [StudentController::class, 'search']);

Route::resource('units', UnitController::class);
Route::get('/units/search/{name}', [UnitController::class, 'search']);

Route::resource('courses', CourseController::class);
Route::get('/courses/search/{name}', [CourseController::class, 'search']);

Route::resource('departments', DepartmentController::class);
Route::get('/departments/search/{name}', [DepartmentController::class, 'search']);

Route::resource('roles', RoleController::class);
Route::get('/roles/search/{name}', [RoleController::class, 'search']);

Route::resource('schools', SchoolController::class);
Route::get('/schools/search/{name}', [SchoolController::class, 'search']);

Route::resource('users', UserController::class);
Route::get('/users/search/{email}', [RoleController::class, 'search']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
