<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\Models\Color;
use App\Models\Size;
use App\Models\Product;
use Illuminate\Http\Request;

class productapController extends Controller
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

    public function show($id)
    {
        return Product::findOrFail($id);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function showc($id)
    {
        $colors=Color::where('product_id',$id)->get();
        return Response::json( $colors);

    }
    public function shows($id)
    {
        $sizes=Size::where('product_id',$id)->get();
        return Response::json( $sizes);
        
    }
    public function showp($id)
    {
        $item=Product::where('id',$id)->first();
        return Response::json(  $item);
        
    }
    public function sell()
    {
        $product=Product::select("*")->whereNotNull('price_sell')->get();
        return Response::json( $product);
    }
    public function productshow($type_id)
    {
        $items=Product::where('type_id',$type_id)->get();
        return Response::json(  $items);
    }
   
}
