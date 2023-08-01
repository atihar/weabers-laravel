<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Mail\contactEmail;

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
    return view('home');
});

Route::get('/case-studies', function () {
    return view('works');
});

Route::get('/our-process', function () {
    return view('process');
});

Route::get('/portfolio', function () {
    return view('elements');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/website-redesign', function () {
    return view('redesign');
});

// Projects static route 
Route::get('/project', function () {
    return view('project1');
});

Route::get('/project-2', function () {
    return view('project2');
});

Route::get('/project-3', function () {
    return view('project3');
});

Route::get('/project-4', function () {
    return view('project4');
});

Route::get('/project-5', function () {
    return view('project5');
});

Route::get('/project-6', function () {
    return view('project6');
});

Route::get('/project-7', function () {
    return view('project7');
});

Route::get('/thank-you', function () {
    return view('success');
});


Route::post('/contact', function(Request $request){
    Mail::send(new contactEmail($request));

    return redirect('/thank-you');
});
