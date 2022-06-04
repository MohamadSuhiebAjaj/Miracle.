<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function getCheckout()
    {
        return view('products.checkout');
    }
    public function storeOrderDetails($params)
{
    $order = Order::create([
        'user_id'           => auth()->user()->id,
        'grand_total'       =>  Cart::getSubTotal(),
        'item_count'        =>  Cart::getTotalQuantity(),
        'first_name'        =>  $params['user_name'],
        'address'           =>  $params['address'],
        'city'              =>  $params['city'],
        'country'           =>  $params['country'],
        'post_code'         =>  $params['post_code'],
        'phone_number'      =>  $params['phone_number'],
        'notes'             =>  $params['notes']
    ]);

    if ($order) {

        $items = Cart::getContent();

        foreach ($items as $item)
        {
            // A better way will be to bring the product id with the cart items
            // you can explore the package documentation to send product id with the cart
            $product = Product::where('name', $item->name)->first();

            $orderItem = new OrderItem([
                'product_id'    =>  $product->id,
                'quantity'      =>  $item->quantity,
                'price'         =>  $item->getPriceSum()
            ]);

            $order->items()->save($orderItem);
        }
    }

    return $order;
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
