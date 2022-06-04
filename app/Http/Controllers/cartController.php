<?php
namespace App\Http\Controllers;
use App\Models\Color;
use App\Models\Size;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Auth;
class cartController extends Controller
{
    
    public function add(Request $request, $id)
    {
        $product = Product::find($id);
        $color=  Color::find($product);
        $size= Size::find($product);
        $user_id = Auth::user()->id;
        $cart= new cart();
        $cart->user_id=$user_id;
        $cart->price=$product->price;
        $cart->count=$request->input('count');
        $cart->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    
    public function showcart(){
        $user_id = Auth::user()->id;
        
        // if(! $user) throw new AuthenticationException('user not found');

        $product = cart::where('user_id',$user_id)->get();
        return view('products.cart', compact('product'));
        
    }
    public function getRemoveFromCart(Request $request, $id)
    {
        $product = Product::find($id);
        $old_cart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($old_cart);
        $remove = $cart->remove($product, $product->id);

        $message = [];
        $message['type'] = 'alert-success';
        $message['text'] = $product->title . " has been removed from your cart.";

        if($remove == 2) {
            $request->session()->forget('cart');
        } else if($remove == 1) {
            $request->session()->put('cart', $cart);
        } else {
            $message['type'] = 'alert-danger';
            $message['text'] = 'Your cart is empty.';
        }
        return redirect()->route('products.cart', compact('message'));
    }

    public function postUpdateCart(Request $request) {

        $this->validate($request, [
            'quantity' => 'required|numeric|min:1'
        ]);

        $message = [];

        if( Session::has('cart') ) {
            $product_id = $request['product_id'];
            $product = Product::find($product_id);
            $old_cart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($old_cart);
            $update = $cart->update($product, $product->id, $request['quantity']);

            $request->session()->put('cart', $cart);

            $message['type'] = 'alert-success';
            $message['text'] = $product->title . " has been updated.";
        } else {
            $message['type'] = 'alert-danger';
            $message['text'] = 'Your cart is empty.';
        }

        return redirect()->route('products.cart', compact('message'));
    }
}