<?php

namespace App\Http\Controllers;
use App\Models\Offers;

use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class offersController extends Controller
{
    public $Offers;
    public function OffersModle ()
    {
        $this->Offers = new Offers(

            'id',
            'title',
            'date',
            'description',
            'imgurl',
            'price',
            'sales'
        );

    }

    public function GetOffers(){
        $this->OffersModle();

        $collection = collect([
            (object) [
                'website' => 'twitter',
                'url' => 'twitter.com'
            ],
            (object) [
                'website' => 'google',
                'url' => 'google.com'
            ]
        ]);
        //return $collection;
        return collect($this->Offers->GetOffers())->toJSON();
    }

}
