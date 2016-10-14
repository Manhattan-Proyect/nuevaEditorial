<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller
{

    public function __construct(){
        //Solo permite ver los products, pero no editarlos
        $this->middleware("admin.user");
        $this->middleware("auth",["except"=>"show"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view("products.index",["products"=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        return view("products.create",["product" => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasFile = $request->hasFile('cover') && $request->cover->isValid();
        $product = new Product;

        $product->titulo = $request->titulo;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->user_id = Auth::user()->id;
        

        if ($hasFile) {
            $extension = $request->cover->extension();
            $product->extension = $extension;
        }

        if($product->save()){
            if ($hasFile) {
                $request->cover->storeAs('images',"$product->id.$extension");
            }
            return redirect("/products");
        }else{
            return redirect("/products/create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $product = Product::find($id);
       return view("products.edit",["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hasFile = $request->hasFile('cover') && $request->cover->isValid();
        $product = Product::find($id);

        $product->titulo = $request->titulo;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        if ($hasFile) {
            $extension = $request->cover->extension();
            $product->extension = $extension;
        }

        if($product->save()){
            if ($hasFile) {
                $request->cover->storeAs('images',"$product->id.$extension");
            }
            return redirect("/products");
        }else{
            return redirect("/products/edit");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/products');
    }
}
