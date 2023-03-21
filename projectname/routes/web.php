<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

use App\Http\Controllers\QuestionController;


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
    return 'Hello, World!';
});

Route::get('/about', function () {
    return view('about');
});


// Route::get('hotdogs/{id}', function($id) {
//   return sprintf('hotdogs #%s', $id);
// });

Route::get('hotdogs/{id}', function($id) {
  return sprintf('hotdogs #%d', $id);
})->where('id', '[0-9]+');

Route::get('specials/{qty}/{name}', function($qty,$name) {
  return view('specials')->with(['qty' =>$qty, 'name' => $name]);
})->where(['qty' => '[0-9]+', 'name' => '[a-z]+']);


//QUESTION COMTROLLER 
Route::resource('questions',QuestionController::class);



Route::get('/index', [TaskController::class, 'index']);
