<?php

use App\RequestProperty;
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
})->name('home');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
});
Route::get('/loggedin', function () {
    $properties = RequestProperty::where('owner_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();
    return view('loggedin')->with('properties', $properties);
})->name('loggedin');
Route::post('/login', 'Authcontroller@login');
Route::get('add-a-property', 'PropertyController@addAProperty')->name('addAProperty');
Route::post('/register', 'Authcontroller@register');
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('property', 'PropertyController');
Route::get('request-property/{id}', 'PropertyController@requestProperty')->name('request-property');
Route::post('request-property', 'PropertyController@postRequestProperty')->name('post-request-property');
