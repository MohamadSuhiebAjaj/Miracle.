<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;


class ProductController extends Controller

{
    
    public function index()
    {
     //   $product = Product::all();
     $products = Product::latest()->paginate(4);
       return view('product.index', compact('products'));
    }
   
    public function create()
    {
        $group_s= ProductType::all();
        return view('product.create',compact('group_s'));
    }


    public function store(Request $request)
    {

        $product=new Product();
        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/product',$filename);
            $product->photo_g=$filename;
        }
        $product->price=$request->input('price');
        $product->photo=$request->input('photo');
        $product->description_ar=$request->input('description_ar');
        $product->description_en=$request->input('description_en');
        $product->type_id=$request->input('type_id');
        $product->save();
         return view('color.create');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'))  ;
    }

    public function edit($id)
    {
        $product=Product::find($id);
        return view('product.edit', compact('product'))  ;
    }

    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/product',$filename);
            $product->photo_g=$filename;
        }
        $product->price=$request->input('price');
        $product->photo=$request->input('photo');
        $product->description_ar=$request->input('description_ar');
        $product->description_en=$request->input('description_en');
        $product->type_id=$request->input('type_id');
        $product->update();
         return redirect()->route('products.index')
         ->with('success','product updated successflly') ;
    }

   
    public function destroy($id)
    {
       $product=Product::find($id);
       $product->delete();

        return redirect()->route('products.index')
        ->with('success','product deleted successflly') ;
    }
   



}
