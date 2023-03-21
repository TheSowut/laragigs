<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Models\ListingOld;
use App\Models\Listing;

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


// All Listings
Route::get('/', function() {
//    file with the same name must be contained within resources/views
    return view('listings', [
//        parsed inside listings.blade.php
        'heading' => 'Latest Listings',
//      class::static_method
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listings/{listing}', function(Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});

//Route::get('/hello', function () {
//    return response('<h1>Hello World</h1>', 404)
////     will not render the html, due to text/plain header
//        ->header('Content-Type', 'text/plain')
//        ->header('foo', 'bar');
//});
//
//// Wildcard route
//Route::get('/posts/{id}', function ($id) {
//    return response('Post ' . $id);
//})
//// Match wildcard number only
//    ->where('id', '[0-9]+');
//
//// Debugging
//Route::get('/debug/{id}', function ($id) {
////     Pauses and displays the property.
//    dd($id);
////     ddd() for more info.
//    return response('The id is ' . $id);
//});
//
//Route::get('/search', function (Request $req) {
//    return response('name: ' . $req->name . ',<br> city: ' . $req->city);
////    http://localhost:8000/search?name=123&city=456
//});
