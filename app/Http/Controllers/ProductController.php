<?php

namespace App\Http\Controllers;
use App\Models\Color;
use App\Models\Size;
use App\Models\Product;
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
        $product=Product::latest()->paginate(10);
        return view('products.index')->with('product',$product);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colors=Color::where('product_id',$id)->get();
        $sizes=Size::where('product_id',$id)->get();
        $item=Product::where('id',$id)->first();
        return view('products.show', compact('colors','sizes','item'));
    }
    
    public function sell()
    {
        $product=Product::select("*")->whereNotNull('price_sell')->get();
        return view('products.sell')->with('product',$product);
    }
    public function productshow($type_id)
    {
        $items=Product::where('type_id',$type_id)->get();
        return view('shows')->with('items',$items);
    }
   
}
