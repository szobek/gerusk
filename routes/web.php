<?php

use Illuminate\Support\Facades\Route;



use App\Mail\TestEmail;
use Illuminate\Http\Request;
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
    $sended=false;
    return view('welcome' ,compact('sended'));
});


Route::any('/send-test-email', function (Request $request) {
 $validatedData = $request->validate([
        'name' => 'required|min:3',
        'telephone' => 'required|min:3',
        'address' => 'required|email|min:3', 
        'type' => 'required|min:4',
        'message' => 'required|min:10',
    ]);

    Mail::to("kunszt.norbert@gmail.com")->send(new TestEmail($validatedData));

    return redirect('/')->with('sended', true);
})->name('email.test');