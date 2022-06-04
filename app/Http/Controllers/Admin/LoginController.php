<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use  App\Http\Requests\LoginRequest;

class LoginController extends Controller{

    public function getlogin(){
        return view('admin.auth.login');
    }

    public function login (LoginRequest $request){
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
           // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admindashboard');
        }
       // notify()->error('خطأ في البيانات  الرجاء المجاولة مجدداً ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }

    public function getlogout(){
        return view('admin.auth.login');
    }




  

   
 }