<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Listing;

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
// endpoint and function

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);




// Closures are anonymous functions that can be stored in variables, passed as arguments to other functions, or returned as values from other functions.
// $addition = function(int $a, int $b): int {
//     return $a + $b;
// };
// $result = $addition(2, 3);

// Route::get('/hello', function(){
//     return response("<h1>Hello World</h1>", 200)->header('Content-Type', 'text/plain');
// });

// Route::get('/posts/{id}', function($id){
//     // die and dump
//     // dd($id);

//     // die dump and debug
//     // ddd($id);

//     return response('Post '.$id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name .' '. $request->city;
// });