<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
  

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/service', function () {
    return view('pages.service');
});
// Route::get('/track', function () {
//     return view('pages.track');
// });
Route::get('/book','App\Http\Controllers\CustomAuthController@book');
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/dashboard', 'App\Http\Controllers\CustomAuthController@dashboard');
Route::get('/logout','App\Http\Controllers\CustomAuthController@logout');

Route::post('/contactus','App\Http\Controllers\CustomAuthController@contactinsert');

Route::get('admin/table', 'App\Http\Controllers\CustomAuthController@indextable');
Route::get('amdmin/newstabledelete/{id}','App\Http\Controllers\CustomAuthController@newstabledelete');
Route::post('/useradd/{id}','App\Http\Controllers\CustomAuthController@address');
Route::get('home/bookrepair','App\Http\Controllers\CustomAuthController@bookrepair');
Route::post('/home/mobliebook','App\Http\Controllers\CustomAuthController@moblibooking');
Route::get('home/Tracking Status', 'App\Http\Controllers\CustomAuthController@tacking');
Route::get('/admin/addproblem', 'App\Http\Controllers\CustomAuthController@addproblem');
Route::get('admin/problemdelete/{id}','App\Http\Controllers\CustomAuthController@problemdelete');
Route::post('/admin/addproblems','App\Http\Controllers\CustomAuthController@addproblems');
Route::get('admin/booking', 'App\Http\Controllers\CustomAuthController@booking');
Route::post('admin/status','App\Http\Controllers\CustomAuthController@statusupdate');
Route::post('admin/bookingdelete','App\Http\Controllers\CustomAuthController@bookingdelete');

Route::get('/track', 'App\Http\Controllers\CustomAuthController@statustracking');