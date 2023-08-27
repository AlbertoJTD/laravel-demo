<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

Route::get('/', [ListingController::class, 'index']);
// Route::get('/listing/{listing}', [ListingController::class, 'show']);
Route::resource('listings', ListingController::class)->only(['show']);
// Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
// Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
// Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
// Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
Route::resource('listings', ListingController::class)->except(['show', 'index'])->middleware('auth');
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


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