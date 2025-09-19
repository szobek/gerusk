<?php

use Illuminate\Support\Facades\Route;



use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
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


Route::get('/send-test-email', function () {

    Mail::to("kunszt.norbert@gmail.com")->send(new TestEmail());

    return "Teszt e-mail elküldve!";
});