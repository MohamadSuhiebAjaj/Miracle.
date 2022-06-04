<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductType;
use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
  
    public function index()
    {
        $product_type = ProductType::all();
        return view('group_s.index', compact('product_type'));
    }
    

   
    public function create()
    {
        $group_fs= Department::all();
        return view('group_s.create', compact('group_fs'));
    }

    
    public function store(Request $request)
    {
       
        $product_type= new ProductType();
        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/groups',$filename);
            $product_type->photo=$filename;
        }
         $product_type->name_ar=$request->input('name_ar');
         $product_type->name_en=$request->input('name_en');
         $product_type->department_id=$request->input('department_id');
         $product_type ->photo=$request->input('photo');
         $product_type->save();
        return redirect()->route('group_s.index')
         ->with('success','group second is added successflly') ;
    }

   

   
    public function edit($id)
    {
        $group_fs= Department::all();
        $product_type=ProductType::find($id);
        return view('group_s.edit', compact('product_type','group_fs'))  ;
    }


    public function update(Request $request,$id)
    {
        $product_type=ProductType::find($id);
        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/groups',$filename);
            $product_type->photo=$filename;
        }
        $product_type->name_ar=$request->input('name_ar');
        $product_type->name_en=$request->input('name_en');
        $product_type->department_id=$request->input('department_id');
        $product_type ->photo=$request->input('photo');
        $product_type->update();

        return redirect()->route('group_s.index')
        ->with('success','group second is added successflly') ;
    }

    
    public function destroy($id)
    {
        $product_type=ProductType::find($id);
        $product_type->delete();
        return redirect()->route('group_s.index')
        ->with('success','Group s deleted successflly') ;
    }
}
