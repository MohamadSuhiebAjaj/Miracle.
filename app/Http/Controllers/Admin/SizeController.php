<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    
    public function index()
    {
        $size = Size::all();
        return view('size.index', compact('size'));
    }

    
    public function create()
    {
        return view('size.create');
    }


    public function store(Request $request)
    {
       $size= new Size();
       $size->size_number=$request->input('size_number');
       $size->product_id=$request->input('product_id');
      
       $size->save();
       return redirect()->route('sizes.index')
       ->with('success','sizes added successflly') ;
    
    
    }


    public function show(Size $size)
    {
        return view('size.show', compact('size'))  ;
    
    }


    public function edit($id)
    {
        $size=Size::find($id);
        return view('size.edit', compact('size'))  ;
    }

    
    public function update(Request $request, $id)
    {
        $size=Size::find($id);
        $size->size_number=$request->input('size_number');
        $size->product_id=$request->input('product_id');
       
        $size->update();

        return redirect()->route('sizes.index')
         ->with('success','size is  added successflly') ;
    }

    
    public function destroy($id)
    {
        $size=Size::find($id);
        $size->delete();
        return redirect()->route('sizes.index')
        ->with('success','size is deleted successflly') ;
    }
}
