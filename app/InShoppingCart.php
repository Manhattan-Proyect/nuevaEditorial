<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InShoppingCart extends Model
{
    protected $fillable = ["product_id","shopping_cart_id"];
/*
    public static function getId($product,$shopping_cart){
    	$id = $shopping_cart->inShoppingCart()->where('product_id',$product->id)->delete();
    	//INDICAR nombre de tabla

    	return $id;
    }
*/

    public function shoppingCart(){

    }

    public function products(){
    	return $this->belongsToMany('App\ShoppingCart','in_shopping_carts','id');
    }

    public static function productsCount($shopping_cart_id){
        return InShoppingCart::where("shopping_cart_id",$shopping_cart_id)->count();

    }
}
