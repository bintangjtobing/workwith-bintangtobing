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

use App\Mail\kembangkanlahMail;
use Illuminate\Support\Facades\Redirect;

Route::get('/events/{event}', 'EventsController@show')
    ->name('events.show');
Route::feeds();
Route::get('/', function () {
    return view('new');
});
Route::get('/work', function () {
    return Redirect::to('https://workwith.bintangtobing.com');
});
// SOCIAL MEDIA
Route::get('/mau-liat-apa-nih', function () {
    return view('linktree.index');
});
Route::get('/kirim-vote/{tokens}', function () {
    \Mail::to('hello@bintangtobing.com')->send(new kembangkanlahMail);
    return redirect('/mau-liat-apa-nih')->with('sukses', 'Dukungan kamu telah dikirim. Makasih ya.');
});
Route::get('/youtube', function () {
    return Redirect::to('http://www.youtube.com/c/BintangJeremiaTobing');
});
Route::get('/ask-fm', function () {
    return Redirect::to('https://ask.fm/hello3438');
});
Route::get('/twitter', function () {
    return Redirect::to('http://www.twitter.com/bintangjtobing');
});
Route::get('/linkedin', function () {
    return Redirect::to('http://www.linkedin.com/in/bintangtobing');
});
Route::get('/instagram', function () {
    return Redirect::to('http://www.instagram.com/bintangjtobing');
});
Route::get('/github', function () {
    return Redirect::to('http://www.github.com/bintangjtobing');
});
Route::get('/facebook', function () {
    return Redirect::to('https://facebook.com/bintangjtobing');
});

Route::get('/dark', function () {
    return view('dark');
});
Route::post('/postmessages', 'homeController@postemail');
Route::get('sign-in', 'SignController@index');


Route::get('/tool', function () {
    return view('dashII.index');
});
Route::get('/email', 'SignController@email');
Route::get('email/read/{message_id}', 'SignController@emailread');
