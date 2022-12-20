<?php

use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return redirect('/dashboard');
});

//Route Group
// Route::prefix('dashboard')->group(function () {
//     Route::get('/main', [UserController::class, 'show_index']);
// });

Route::get('/dashboard', [UserController::class, 'show_index']);
Route::get('/json', [UserController::class, 'show_json']);
Route::post('/add_product', [UserController::class, 'add_product']);
Route::resource('sample', ResourceController::class);
Route::get('/profile',[UserController::class, 'profile']);
Route::match(['get', 'patch'],'/update/{id}', [UserController::class, 'update']);
Route::delete('/delete/{id}',[UserController::class, 'delete']);



Route::get('/token', function () {
    return csrf_token(); 
});