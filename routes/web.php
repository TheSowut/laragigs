<?php

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
    return view('welcome');
});

Route::get('/hello', function () {
   return response('<h1>Hello World</h1>', 404)
//     will not render the html, due to text/plain header
       ->header('Content-Type', 'text/plain')
       ->header('foo', 'bar');
});

// Wildcard route
Route::get('/posts/{id}', function($id) {
    return response('Post ' . $id);
})
// Match wildcard number only
->where('id', '[0-9]+');
