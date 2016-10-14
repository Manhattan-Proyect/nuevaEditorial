<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\ShoppingCart;

use App\Product;

class MainController extends Controller{

	public function home(){

		$products = Product::latest()->simplePaginate(6);

		set_time_limit(300);

		//dd($products);
		return view('main.home',['products'=>$products]);

	}

}