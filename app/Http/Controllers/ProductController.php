<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('coffee.index', ['products' => $products]);
    }
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('product.index');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('coffee.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('coffee.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }
}