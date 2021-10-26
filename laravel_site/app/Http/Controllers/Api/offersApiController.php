<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use Illuminate\Http\Request;

class offersApiController extends Controller
{
    public function GetAllOffers (){
        $offers= Offers::get();

        return response()->json($offers);
    }
}
