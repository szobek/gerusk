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

/* ------------------------------------ pages ----------------------------------------------- */

Route::get('/', function () {
    $sended = false;
    $refSlides = [
        ['url' => 'resources/assets/images/ref/1.jpg', 'alt' => 'Első kép'],
        ['url' => 'resources/assets/images/ref/2.jpg', 'alt' => 'Második kép'],
        ['url' => 'resources/assets/images/ref/3.jpg', 'alt' => 'Harmadik kép'],
        ['url' => 'resources/assets/images/ref/4.jpg', 'alt' => 'Negyedik kép'],
    ];

    $galleryImages = [
        ['url' => 'resources/assets/images/gallery/1.jpg', 'alt' => 'Első kép'],
        ['url' => 'resources/assets/images/gallery/2.jpg', 'alt' => 'Második kép'],
        ['url' => 'resources/assets/images/gallery/3.jpg', 'alt' => 'Harmadik kép'],
        ['url' => 'resources/assets/images/gallery/4.jpg', 'alt' => 'Negyedik kép'],
        ['url' => 'resources/assets/images/gallery/5.jpg', 'alt' => 'Ötödik kép'],
        ['url' => 'resources/assets/images/gallery/6.jpg', 'alt' => 'Hatodik kép'],
        ['url' => 'resources/assets/images/gallery/7.jpg', 'alt' => 'Hetedik kép'],
        ['url' => 'resources/assets/images/gallery/8.jpg', 'alt' => 'Nyolcadik kép'],
        ['url' => 'resources/assets/images/gallery/9.jpg', 'alt' => 'Kilencedik kép'],
        ['url' => 'resources/assets/images/gallery/10.jpg', 'alt' => 'Tizedik kép'],
    ];
    $examplesImages = [
        ['url' => 'resources/assets/images/examples/1.jpg', 'alt' => 'Első kép'],
        ['url' => 'resources/assets/images/examples/2.jpg', 'alt' => 'Második kép'],
        ['url' => 'resources/assets/images/examples/3.jpg', 'alt' => 'Harmadik kép'],
        ['url' => 'resources/assets/images/examples/4.jpg', 'alt' => 'Negyedik kép'],
        ['url' => 'resources/assets/images/examples/5.jpg', 'alt' => 'Ötödik kép'],
    ];

    return view('welcome', compact('sended', 'refSlides', 'galleryImages', 'examplesImages'));
});


Route::get('/stresny-nater', function () {
    return view('stresni');
})->name('stresni');

Route::get('/fasadny-nater', function () {
    return view('fasadni');
})->name('fasadni');
