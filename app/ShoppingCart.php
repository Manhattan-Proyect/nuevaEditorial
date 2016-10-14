<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
	protected $fillable = ['status'];

	public function generateCustomID(){
		return md5("$this->id $this->updated_at");
	}

	public function updateCustomIDAndStatus(){
		$this->status = "approved";
		$this->customid = $this->generateCustomID();
		$this->save();
	}

	public function approve(){
		$this->updateCustomIDAndStatus();
	}

	public function inShoppingCarts(){
		return $this->hasMany('App\InShoppingCart');
	}

	public function products(){
		return $this->belongsToMany('App\Product','in_shopping_carts');
	}

	public function order(){
		return $this->hasOne('App\Order')->first();
	}

	public function productsSize()
	{
			return $this->products()->count();
	}

	public function total(){
		//QUITAR el /100
		return $this->products()->sum("precio");
	}

	

	public static function findOrCreateBySessionId($shopping_cart_id)
	{
    	if($shopping_cart_id)
    		return ShoppingCart::findBySession($shopping_cart_id);
    	else
    		return ShoppingCart::createWithoutSession();
	}

	public static function findBySession($shopping_cart_id)
	{

		return ShoppingCart::find($shopping_cart_id);
	}

	public static function createWithoutSession()
	{
		//$shopping_cart = new ShoppingCart;

		//$shopping_cart->status = "incompleted";

		//$shopping_cart->save();

		//return $shopping_cart;

		return ShoppingCart::create(["status"=> "incompleted"]);
	}


}
