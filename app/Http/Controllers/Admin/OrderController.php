<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('order.index', compact('order'));
    }

    public function create()
    {
        return view('order.create');
    }

   
    public function store(Request $request)
    {
        $order= new Order();
        $order->user_name=$request->input('user_name');
        $order->number_phone=$request->input('number_phone');
        $order->address=$request->input('address');
        $order->user_id=$request->input('user_id');
        $order->price=$request->input('price');
        $order->price_total=$request->input('price_total');
        $order->save();
        return redirect()->route('orders.index')
         ->with('success','order is added successflly') ;
    }



    
    public function edit($id)
    {
        $order=Order::find($id);
        return view('order.edit', compact('order'))  ;
    }

   
    public function update(Request $request,$id)
    {
        $order=Order::find($id);
        $order->user_name=$request->input('user_name');
        $order->number_phone=$request->input('number_phone');
        $order->address=$request->input('address');
        $order->user_id=$request->input('user_id');
        $order->price=$request->input('price');
        $order->price_total=$request->input('price_total');
        $order->update();
        return redirect()->route('orders.index')
         ->with('success','order is added successflly') ;
    }

   
    public function destroy($id)
    {
        $order=Order::find($id);
        $order->delete();
        return redirect()->route('orders.index')
        ->with('success','order deleted successflly') ;
    }
}
