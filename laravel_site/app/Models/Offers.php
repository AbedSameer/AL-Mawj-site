<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Offers extends Model
{
    use HasFactory;



    protected $table='mothlyoffers';
    protected $fillable = [
        'id','title','discription','price','img_url','sales'
];
/*
    public $id;
    public $title;
    public $date;
    public $description;
    public $imgurl;
    public $price;
    public $sales;
    public function __construct($id, $title, $date, $description,$price,$imgurl,$sales)
    {
        $this->title = $title;
        $this->id = $id;
        $this->date = $date;
        $this->description = $description;
        $this->price = $price;
        $this->imgurl = $imgurl;
        $this->sales = $sales;
    }
    public function GetOffers(){
        return DB::select('select * from mothlyoffers');
    }*/
}
