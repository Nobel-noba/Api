<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\Productcollection;
use App\Http\Resources\Product\ProductResource;
use App\Models\models\product;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        this will paginate the information but we cant manipulat it as given in the show method
      /**  return ProductResource::collection(Product::all()); */
//        due to this we will change teh extention of ProductCollection and we can manipulate the data shown
        return Productcollection::collection(Product::all());

//        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        return new ProductResource(Product::findOrFail($product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
