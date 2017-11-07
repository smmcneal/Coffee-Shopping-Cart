<?php

namespace App\Http\Controllers;

use App\Cart;
Use App\Product;
Use Illuminate\Http\Request;
Use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('coffee.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request,$id){
        $product = Product::find($id);
        $cart = Session::has('cart') ? Session::get('cart') : null;
       // $cart = new Cart($oldCart);
       if(!$cart)
       {
           $cart = new Cart($cart);
       }
        $cart->add($product, $product->id);

        Session::put('cart', $cart);
        //$request->session()->put('cart', $cart);
        return redirect()->route('product.index');
    }

    public function getCart() {
        if (Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
    }
}