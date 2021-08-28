<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $categories = Category::get();
            //$products = Product::paginate(16);
            $products = Product::get();

            $products_count[]=0;
        
           foreach($categories as $category){  $products_count[$category->name]  =  0; }
               
           foreach($products as $product){
                foreach($categories as $category){
                    if($category->id === $product->category_id){
                        $products_count[$category->name] += 1;
                    }

                }
                
           }
       
        return view( 'welcome' , compact("products", "categories","products_count",  ) );
    }

    /**
     *  return product details
     *  @return \Illuminate\Http\Response
     */
    public function detailsProduct($slug){

        //dd($slug);
        $product = Product::where("slug", $slug)->firstOrFail();

       return view("products.details", compact("product"));
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
