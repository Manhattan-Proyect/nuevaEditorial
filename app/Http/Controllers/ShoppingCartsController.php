<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ShoppingCart;

use App\PayPal;

use App\Http\Controllers\Auth;


class ShoppingCartsController extends Controller
{
    public function __construct(){
        $this->middleware("shoppingcart");
        $this->middleware("auth",["except"=>"index"]);

    }

    public function show($id){
        $shopping_cart = ShoppingCart::where('customid',$id)->first();

        $order = $shopping_cart->order();

        return view("shopping_carts.completed",["shopping_cart"=>$shopping_cart,"order"=> $order]);
    }

    public function index(Request $request){
        //$mailer = new OrderCreated();

        //$order = Order::all()->last();

        //$order->sendmail();
        
    	$shopping_cart = $request->shopping_cart;
        
        //$paypal = new PayPal($shopping_cart);

        //Array de la tabla de in_shopping_cart
        $products_in_shopping_cart = $shopping_cart->inShoppingCarts;

        //$payment = $paypal->generate();

        //return redirect($payment->getApprovalLink());

        //return "Listortiiiiiiiiiiiii!!!";

         $products = $shopping_cart->products;        

         $total = $shopping_cart->total();

         if(sizeof($products) != 0)
         {
         return view("shopping_carts.index",["products"=>$products,"total"=>$total,'products_in_shopping_cart'=>$products_in_shopping_cart,'shopping_cart_id'=>$shopping_cart->id]);
        }else{
            return view("/shopping_carts.empty");
        }
    }

    public function checkout(Request $request){
        
        $shopping_cart = $request->shopping_cart;
        $paypal = new PayPal($shopping_cart);

        $payment = $paypal->generate();

        //$shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
        //$payment = $this->getPayPal($shopping_cart);

        //Aqui agregar la logica de actualizacion de compras para el cliente.

        return redirect($payment->getApprovalLink());
    

    }

}