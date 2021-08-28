<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements Buyable
{
    use HasFactory;

     public function getBuyableIdentifier($options = null) {
        return $this->id;
    }

    public function getBuyableDescription($options = null) {
        return $this->name;
    }

    public function getBuyablePrice($options = null) {
        return $this->price;
    }


    protected $fillable =[
        "name", 
        "price",
        "description",
        "img_uri",
        "category_id", 
        "slug",
        "inventory_id",
    ];
}
