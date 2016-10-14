<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function inShoppingCarts(){
    	return $this->hasMany('App\inShoppingCart');
    }


    public function shoppingCarts(){
    	//Primer parametro, nombre del Modelo al que pertenece, SEGUNDO Nombre de la tabla que los une
    	return $this->belongsToMany('App\ShoppingCart','in_shopping_carts');
    }

    public function scopeLatest($query){
        return $query->orderBy('id','desc');
    }

    public static function getDescripcionById($id){
   		$product = Product::find($id);
    	return $product->titulo;
    }

    public function paypalItem(){
    	return \PayPalPayment::item()->setName($this->titulo)->setCurrency('USD')->setQuantity(1)->setPrice($this->precio);
    }
}
