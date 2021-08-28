<?php

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

Route::get('/', 'front\NormalUsers@getIndex')->name('main');




Route::get('/الصيدلية', function () {
    return view('Pages/الصيدلية');
})->name('pharmace');

Route::get('/الاتصال', function () {
    return view('Pages/الاتصال');
})->name('contact');


Route::get('/العروض-الشهرية', function () {
    return view('Pages/العروض-الشهرية');
})->name('monthly');


Route::get('/المدونة', function () {
    return view('Pages/المدونة');
})->name('blog');

Route::get('/بطاقات-الولاء', function () {
    return view('Pages/بطاقات-الولاء');
})->name('loyalty');

Route::get('/جواز-سفر-الجمال', function () {
    return view('Pages/جواز-سفر-الجمال');
})->name('passport');

Route::get('/حجز-موعد', function () {
    return view('Pages/حجز-موعد');
})->name('Booking');

Route::get('/حول-موج', function () {
    return view('Pages/حول-موج');
})->name('about');

Route::get('/خدماتنا', function () {
    return view('Pages/خدماتنا');
})->name('serveses');


Route::get('/صفقات-الجمال', function () {
    return view('Pages/صفقات-الجمال');
})->name('deals');


Route::get('/مركز-آساج', function () {
    return view('Pages/مركز-آساج');
})->name('asag-center');
