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

use App\Mail\emailMe;
use App\messageDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $project = DB::table('projectdbs')
        ->orderBy('projectdbs.created_at', 'DESC')
        ->limit(4)
        ->get();
    return view('homepage.index', ['project' => $project]);
});
Route::get('/id', function () {
    $project = DB::table('projectdbs')
        ->orderBy('projectdbs.created_at', 'DESC')
        ->limit(4)
        ->get();
    return view('id', ['project' => $project]);
});
Route::get('/projects-done', function () {
    $project = DB::table('projectdbs')
        ->orderBy('projectdbs.created_at', 'DESC')
        ->get();
    return view('homepage.projects', ['project' => $project]);
});

Route::post('/send-message/{tokens}', function (Request $request) {
    $name = $request->nama;
    $email = $request->email;
    $project = $request->project_type;
    $pesan = $request->pesan;

    $message = new messageDB();
    $message->nama = $name;
    $message->email = $email;
    $message->project_type = $project;
    $message->pesan = $pesan;
    // dd($message);
    $message->save();


    return view('emails.done');
});

Route::get('/congrat', function () {
    return view('emails.done');
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
    return Redirect::to('https://facebook.com/bintangjtobingg');
});


// Rahasia Administrator
Route::prefix('secret')->group(function () {
    Route::get('/', 'DashboardController@loginshow')->name('login.show');
    Route::post('/', 'DashboardController@loginproses')->name('login.proses');
});

Route::group(['prefix' => 'admin', 'middleware' => 'isLogin'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::post('/addproject', 'DashboardController@addproject');
});
Route::get('logout', function () {
    session()->flush();
    return redirect('/secret');
});
