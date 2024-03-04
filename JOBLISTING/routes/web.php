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
