<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ShoppingCart;

use App\InShoppingCart;

class InShoppingCartsController extends Controller
{

    public function __construct(){
        $this->middleware("shoppingcart");
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shopping_cart = $request->shopping_cart;

       $response = InShoppingCart::create(["shopping_cart_id" => $shopping_cart->id,"product_id"=>$request->product_id]);

       if ($request ->ajax()) {
           return response()->json([
                'products_count' => InShoppingCart::productsCount($shopping_cart->id)
            ]);
       }

       if($response)
            return redirect('/');
        else
            return back();
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd("Id del product: ".$id . " ID del carrito: " . \Session::get('shopping_cart_id'));

        // $carritoId = \Session::get('shopping_cart_id');

        // $nuevoId = InShoppingCart::getId($id,$carritoId);

        // dd($nuevoId);
         InShoppingCart::destroy($id);

        return redirect('/carrito');
    }
}