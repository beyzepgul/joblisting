<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Joblisting;

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

//All Listing
Route::get('/', function () {
    return view('joblisting', [
        'heading' => 'Lastest Listings',
        'listings' => Joblisting::all()
    ]);
});

//Single Listing
Route::get('/listing/{id}', function($id) {
    return view('listing', [
        'listing' => Joblisting::find($id)
    ]);
});

Route::get('/main', function(){
    return view('main');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/manage', function(){
    return view('manage');
});

Route::get('/post', function(){
    return view('post');
});