<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
        $product = Product::all()->where('id',$id);
        if($id)
            return response()->json(["Producto: ".$id=>$product],200);
        return response()->json(["Todos los Producros",Product::all(),200]);
        // return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $Producto = new Product;
        $Producto->product_name = $request->product_name;
        $Producto->quantity = $request->quantity;

        if($Producto->save())
            return response()->json(["Producto creado satisfactoriamente:"=>$Producto],201);
        return response()->json(null,400);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Product $product)
    {
        $product = Product::find($id);
        $product->product_name = $request->get("product_name");
        $product->quantity = $request->get("quantity");

        if($product->save())
            return response()->json(["Producto actualizado:"=>$product],200);
        return response()->json(null,400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
        $product = Product::find($id);
        $product->delete();
        
        return response()->json(["Producto ".$id." Eliminado"=>Product::all()],200);
    }
}
