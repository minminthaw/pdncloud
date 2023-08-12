<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('index');
});

Route::get('/hosting/webhosting', function () {
    return view('/hosting/webhosting');
});

Route::get('/hosting/linuxvps', function () {
    return view('/hosting/linuxvps');
});

Route::get('/hosting/windowvps', function () {
    return view('/hosting/windowvps');
});

Route::get('/hosting/storagevps', function () {
    return view('/hosting/storagevps');
});

Route::get('/other-product/sharedwordpress', function () {
    return view('/other-product/shared-wordpress');
});

Route::get('/other-product/privatewordpress', function () {
    return view('/other-product/private-wordpress');
});

Route::get('/other-product/iptvreseller', function () {
    return view('/other-product/iptvreseller');
});

Route::get('/other-product/channelrestream', function () {
    return view('/other-product/channel-restream');
});




