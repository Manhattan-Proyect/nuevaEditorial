<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use\App\Mail\OrderCreated;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Auth;

class Order extends Model
{

	protected $fillable = ['recipient_name','line1','line2','city','country_code','state','postal_code','email','shopping_cart_id','status','total','guide_number'];

    public function sendMail(){
        $order = new OrderCreated($this);
        $emailUser = Auth::user()->email;
        Mail::to($this->email)->send($order);
        if ($this->email != $emailUser) {
            Mail::to($emailUser)->send($order);
        }
        
    }

    public function sendUpdateMail(){
        $order = new OrderUpdated($this);
        $emailUser = Auth::user()->email;
        Mail::to($this->email)->send($order);
        if ($this->email != $emailUser) {
            Mail::to($emailUser)->send($order);
        }
    }

    public function shoppingCartId(){
        return $this->shopping_cart->customid;
    }

    public function scopeLatest($query){
        return $query->orderID()->monthly();
    }

    public function scopeOrderID($query){
        return $query->orderBy('id','desc');
    }

    public function scopeMonthly($query){
        //date('m') ----> Devuelve el mes actual
        return $query->whereMonth('created_at','=',date('m'));
    }

    public function shopping_cart(){
        return $this->belongsTo('App\ShoppingCart');
    }

    public static function totalMonth(){
        return Order::monthly()->sum("total");
    }

    public static function totalMonthCount(){
        return Order::monthly()->count();
    }

    public static function createFromPayPalResponse($response,$shopping_cart){

    	$payer = $response->payer;

    	$orderData = (array) $payer->payer_info->shipping_address;

    	$orderData = $orderData[key($orderData)];

        //$orderData["email"] = 

    	$orderData["email"] = $payer->payer_info->email;
    	$orderData["total"] = $shopping_cart->total();
    	$orderData["shopping_cart_id"] = $shopping_cart->id;

    	return Order::create($orderData);

    }

    public function address(){
    	return "$this->line1 $this->line2";
    }


}
