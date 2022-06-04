<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function create()
    {
        $user = User::all();
        return view('management.create',compact('user'));

    }
    public function store(Request $request)
    {
    
            $user= new User();
            $user->name=$request->input('name');
            $user->email=$request->input('email');
            $user->password=$request->input('password');
            $user->save();
             return redirect()->route('admins.create')
             ->with('success','admin added successflly') ;

    }

    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('admins.create')
        ->with('success','admin deleted successflly') ;
    }


}
