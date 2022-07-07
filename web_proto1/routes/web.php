<?php

use Illuminate\Support\Facades\Route;

Route::get('firebase','App\Http\Controllers\FirebaseController@index');


// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');

Route::get('/camera', function () {
    return view('camera');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('add-blog-post-form', [App\Http\Controllers\PostController::class, 'index']);

Route::get('students', [App\Http\Controllers\StudentController::class, 'index']);
Route::post('store-form', [App\Http\Controllers\StudentController::class, 'store']);
Route::post('update-form', [App\Http\Controllers\StudentController::class, 'update']);
Route::post('delete-form', [App\Http\Controllers\StudentController::class, 'delete']);
Route::get('edit-page', [App\Http\Controllers\StudentController::class, 'edit_page']);
Route::get('edit-page/{data}', [App\Http\Controllers\StudentController::class, 'edit_page']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


