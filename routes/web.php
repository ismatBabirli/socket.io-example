<?php

use Illuminate\Support\Facades\Broadcast;
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

Broadcast::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('test-broadcast', function () {
    broadcast(new \App\Events\ExampleEvent());
});

Route::get('test-private', function () {
    broadcast(new \App\Events\PrivateEvent());
});
