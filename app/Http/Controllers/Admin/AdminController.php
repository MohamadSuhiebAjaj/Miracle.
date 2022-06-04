<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function create()
    {
        $admin = Admin::all();
        return view('management.create',compact('admin'));

    }

    public function store(Request $request)
    {
    
            $admin= new Admin();
            $admin->name=$request->input('name');
            $admin->email=$request->input('email');
            $admin->password=$request->input('password');
            $admin->save();
             return redirect()->route('admins.create')
             ->with('success','admin added successflly') ;

    }

    public function destroy($id)
    {
        $admin=Admin::find($id);
        $admin->delete();
        return redirect()->route('admins.create')
        ->with('success','admin deleted successflly') ;
    }

    public function createuser()
    {
        $user = User::all();
        return view('management.create',compact('user'));

    }
    public function storeuser(Request $request)
    {
    
            $user= new User();
            $user->name=$request->input('name');
            $user->email=$request->input('email');
            $user->password=$request->input('password');
            $user->save();
             return redirect()->route('admins.create')
             ->with('success','admin added successflly') ;

    }

    public function destroyuser($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('admins.create')
        ->with('success','admin deleted successflly') ;
    }

}
