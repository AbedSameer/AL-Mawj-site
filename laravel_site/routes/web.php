<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;
use \App\Http\Controllers\PagesController;

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

Route::get('/',function(){
    return PagesController::getPage('index');
})->name('index');


Route::get('/Aboutus',function(){
    return PagesController::getPage('Aboutus');
})->name('Aboutus');


Route::get('/Asag',function(){
    return PagesController::getPage('Asag');
})->name('Asag');


Route::get('/BayService',function(){
    return PagesController::getPage('BayService');
})->name('BayService');




Route::get('/BeautyDeals',function(){
    return PagesController::getPage('BeautyDeals');
})->name('BeautyDeals');



Route::get('/BeautyPassport',function(){
    return PagesController::getPage('BeautyPassport');
})->name('BeautyPassport');


Route::get('/BeautyPassportDone',function(){
    return PagesController::getPage('BeautyPassportDone');
})->name('BeautyPassportDone');


Route::get('/Blog',function(){
    return PagesController::getPage('Blog');
})->name('Blog');

Route::get('/BookDate',function(){
    return PagesController::getPage('BookDate');
})->name(' BookDate');

Route::get('/ClientZone',function(){
    return PagesController::getPage('ClientZone');
})->name('ClientZone');


Route::get('/Contact',function(){
    return PagesController::getPage('Contact');
})->name('Contact');


Route::get('/LoyaltyCard',function(){
    return PagesController::getPage('LoyaltyCard');
})->name('LoyaltyCard');

Route::get('/NonSubsicribeClientZone',function(){
    return PagesController::getPage('NonSubsicribeClientZone');
})->name('NonSubsicribeClientZone');

Route::get('/Offers',function(){
    return PagesController::getPage('Offers');
})->name('Offers');

Route::get('/Pharmacy',function(){
    return PagesController::getPage('Pharmacy');
})->name('Pharmacy');

Route::get('/PostForm',function(){
    return PagesController::getPage('PostForm');
})->name('PostForm ');

Route::prefix('Services')->group(function(){


    Route::get('/Dentist',function(){
        return PagesController::getServicePage('Dentist');
    })->name('Dentist');



    Route::get('/Dermatology',function(){
        return PagesController::getServicePage('Dermatology');
    })->name('Dermatology');



    Route::get('/Lab',function(){
        return PagesController::getServicePage('Lab');
    })->name('Lab');



    Route::get('/LaserHair',function(){
        return PagesController::getServicePage('LaserHair');
    })->name('LaserHair');


    Route::get('/Non-surgical',function(){
        return PagesController::getServicePage('Non-surgical');
    })->name('Non-surgical');



    Route::get('/RegularCare',function(){
        return PagesController::getServicePage('RegularCare');
    })->name('RegularCare');



    Route::get('/SkinLaser',function(){
        return PagesController::getServicePage('SkinLaser');
    })->name('SkinLaser');


});


Route::get('Admin/AllOffers/{from}>{to}','offersController@GetOffers' )->name('AllOffers');
/*
function (){

    offersController=>GetOffers();
  offersController=>GetOffers();
}*/
