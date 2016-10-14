<?php

namespace App\Http\Middleware;

use Closure;

use App\ShoppingCart;

class BuildShoppingCart
{



    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $shopping_cart_id = \Session::get('shopping_cart_id');


        $shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);

        $request->shopping_cart = $shopping_cart;

        //El middleware manda la peticion al que sigue despues de el (Puede ser otro Middleware)
        return $next($request);
    }
}
