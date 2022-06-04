<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
   
    public function index()
    {
        $group_fs = Department::all();
        return view('group_fs.index', compact('group_fs'));
    }

    
    public function create()
    {
        return view('group_fs.create');
    }

   
    public function store(Request $request)
    {
        $group_fs= new Department();
        if($request->hasFile('photo_g')){
            $file=$request->file('photo_g');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/group_fs',$filename);
            $group_fs->photo_g=$filename;
        }
        $group_fs->name_ar=$request->input('name_ar');
        $group_fs->name_er=$request->input('name_er');
        $group_fs ->photo_g=$request->input('photo_g');
        $group_fs->save();
        return redirect()->route('group_fs.index')
         ->with('success','group first is added successflly') ;
    }

    
    public function show(Department $group_fs)
    {
        return view('group_fs.show', compact('group_fs'))  ;
    }

    
    public function edit($id)
    {
        $group_fs=Department::find($id);
        return view('group_fs.edit', compact('group_fs'))  ;
    }

    
    public function update(Request $request, $id)
    {
        $group_fs=Department::find($id);
        if($request->hasFile('photo_g')){
            $file=$request->file('photo_g');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/group_fs',$filename);
            $group_fs->photo_g=$filename;
        }
        $group_fs->name_ar=$request->input('name_ar');
        $group_fs->name_er=$request->input('name_er');
        $group_fs ->photo_g=$request->input('photo_g');
        $group_fs->update();

            return redirect()->route('group_fs.index')
            ->with('success','Group fs  updated successflly') ;
    }

    
    public function destroy($id)
    {
        $group_fs=Department::find($id);
        $group_fs->delete();
        return redirect()->route('group_fs.index')
        ->with('success','Group fs deleted successflly') ;
    }
}
