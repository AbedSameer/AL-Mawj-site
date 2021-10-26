<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //this Controller just made fo routing pages "i know thats pad :)"

    public static function getPage($PageName){
        return view("Pages/$PageName");
    }
    public static function getServicePage($PageName){
        return view("Pages/Services/$PageName");
    }
}
