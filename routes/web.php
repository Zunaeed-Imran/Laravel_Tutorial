<?php


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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', function () {
    return view('demo', [
        'heading' => 'latest listing',
        'listings' => Listing::all()
    ]);
});





// // Practicing get method.
// Route::get('/test', function () {
//     echo 'Hello imran';
// });

// // Practicing any method.
// Route::any('/test2', function () {
//     echo 'This is Post method testing';
// });

// Practicing on making file fomr views file.
// Route::get('/demo/{name?}', function ($name = null) {
//     return view('demo') . $name;
// });

// wildcard practice (also add constrain)
// Route::get('/posts/{id}', function ($id) {
//     return response('post' . $id);
// })->where('id', '[0-9]+');

// Die Dump Practice
// Route::get('/posts/{id}', function ($id) {
//     ddd($id);
//     return response('post' . $id);
// })->where('id', '[0-9]+');

// // Request & Query Params.
// Route::get('/search', function (Request $request) {
//     dd($request);
// });
