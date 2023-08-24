<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // view name, data
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/find/{id}', function($id){
    return view('find', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/hello', function() {
//     return 'Hello world';
// });

// Route::get('/hello2', function() {
//     return response('<h1>Hello world</h1>', 200)
//             ->header('Content-Type', 'text/plain')
//             ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function($id) {
//     // dd($id);
//     // ddd($id);
//     return response('Post' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     // dd($request); Get acces to the info

//     return "$request->name $request->city";
// });