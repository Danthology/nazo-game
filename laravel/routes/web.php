<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 这里是您可以注册应用程序的Web路由的地方。
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('continue', 'RedisController@test');

Route::get('hintdownload', 'RedisController@HintDownload');

Route::get('level-1', function () {
    return view('level1');
})->middleware('nazoanti:1');

Route::get('level-2', function () {
    return view('level2');
})->middleware('nazoanti:2');

Route::get('level-3', function () {
    return view('level3');
})->middleware('nazoanti:3');

Route::get('level-4', function () {
    return view('level4');
})->middleware('nazoanti:4');

Route::get('level-5', function () {
    return view('level5');
})->middleware('nazoanti:5');

Route::get('uoos', function () {
    return view('level6');
})->middleware('nazoanti:6');

Route::get('none', function () {
    return view('level7');
})->middleware('nazoanti:7');

Route::get('awesome', function () {
    return view('level8');
})->middleware('nazoanti:8');

Route::get('nice', function () {
    return view('level9');
})->middleware('nazoanti:9');

Route::get('bloom_filter', function () {
    return view('level10');
})->middleware('nazoanti:10');

Route::get('dance_of_the_river_spirits', function () {
    return view('level11');
})->middleware('nazoanti:11');

Route::get('4.08kb', function () {
    return view('level12');
})->middleware('nazoanti:12');

Route::get('boinc', function () {
    return view('level13');
})->middleware('nazoanti:13');

Route::get('python', function () {
    return view('level14');
})->middleware('nazoanti:14');

Route::get('notre_dame_de_paris', function () {
    return view('level15');
})->middleware('nazoanti:15');

Route::get('spark', function () {
    return view('level16');
})->middleware('nazoanti:16');

Route::get('0xcccc', function () {
    return view('level17');
})->middleware('nazoanti:17');

Route::get('escape', function () {
    return view('level18');
})->middleware('nazoanti:18');

Route::get('deep_ones', function () {
    return view('level19');
})->middleware('nazoanti:19');

Route::get('blizzard','RedisController@sticky')->middleware('nazoanti:20');

Route::get('touhou_project', function () {
    return view('pause');
})->middleware('nazoanti:21');
