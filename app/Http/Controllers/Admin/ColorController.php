<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::all();
       // $colors = Color::latest()->paginate(4);
        return view('color.index', compact('colors'));
    }

    
    public function create()
    {
        return view('color.create');
    }
    
    public function store(Request $request)
    {
        $size= new Size();
        $size->size_number=$request->input('size_number');
        $size->product_id=$request->input('product_id');
        $size->save();
            $color= new Color();
            if($request->hasFile('photo_color')){
                $file=$request->file('photo_color');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('uploads/color',$filename);
                $color->photo_g=$filename;
            }
            $color->name_ar=$request->input('name_ar');
            $color->name_en=$request->input('name_en');
            $color->product_id=$request->input('product_id');
            $color->photo_color=$request->input('photo_color');
    
            $color->save();
             return redirect()->route('colors.index')
             ->with('success','color added successflly') ;

    }

   

    
    public function edit($id)
    {
        $color=Color::find($id);
        return view('color.edit', compact('color'))  ;
    }

    
    public function update(Request $request,$id)
    {
        $color=Color::find($id);
        if($request->hasFile('photo_color')){
            $file=$request->file('photo_color');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/color',$filename);
            $color->photo_g=$filename;
        }
        $color->name_ar=$request->input('name_ar');
            $color->name_en=$request->input('name_en');
            $color->product_id=$request->input('product_id');
            $color->photo_color=$request->input('photo_color');

            $color->update();
            
         return redirect()->route('colors.index')
         ->with('success','color updated successflly') ;
        
    }

   
    public function destroy($id)
    {
        $color=Color::find($id);
        $color->delete();
        return redirect()->route('colors.index')
        ->with('success','color deleted successflly') ;
    }
}
