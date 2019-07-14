<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Web controller
        // $products = Product::all();
        // return view('product.home', compact('products'));

        // API controller
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Web controller
        // $product = new Product;
        // $product->product_name = $request->product_name;
        // $product->product_price = $request->product_price;
        // $product->user_id = Auth::user()->id;
        // $product->save();

        // return redirect('product');

        // API Controller
        return Product::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        // API Controller
        return Product::find($product->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        // Web Controller
        $product = Product::findOrFail($product->id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        // Web Controller
        // $product->product_name = $request->product_name;
        // $product->product_price = $request->product_price;
        // $product->save();
        // return redirect('product');

        // API Controller
        $product = Product::findOrFail($product->id);
        $product->update($request->all());

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        // Web Controller
        // $product = Product::findOrFail($product->id);
        // $product->delete();
        // return redirect('product');

        // API Controller
        $product = Product::findOrFail($product->id);
        $product->delete();

        return 204;
    }
}
