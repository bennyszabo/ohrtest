<?php

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

Route::get('/task1desc', function () {
    return view('desc/task1');
});
Route::get('/task2desc', function () {
    return view('desc/task2');
});
Route::get('/task3desc', function () {
    return view('desc/task3');
});
Route::get('/task4desc', function () {
    return view('desc/task4');
});
Route::get('/task5desc', function () {
    return view('desc/task5');
});
Route::get('/task6desc', function () {
    return view('desc/task6');
});
Route::get('/task7desc', function () {
    return view('desc/task7');
});

Route::get('/task1', 'Task1Controller@index');

Route::get('/task2', 'Task2Controller@index');

Route::get('/task3', 'Task3Controller@index');
Route::post('/task3', 'Task3Controller@submit');

Route::get('/task4', 'Task4Controller@index');
Route::post('/task4', 'Task4Controller@submit');

Route::get('/task5', 'Task5Controller@index');

Route::get('/task6', 'Task6Controller@index');
Route::post('/task6', 'Task6Controller@submit');

Route::get('/task7', 'Task7Controller@index');
