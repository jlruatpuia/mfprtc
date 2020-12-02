<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::simplePaginate(16);
        return view('home')->with('products', $products);
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('products.single')->with('product', $product);
    }

    public function cart(){
        return view('cart');
    }

    public function addToCart($id, $quantity=null)
    {
        $product = Product::find($id);
        if(!$product) abort(404);

        $cart = Session::get('cart');

        //if cart is empty, add first product
        if(!$cart) {
            $cart = [
                $id => [
                    'id' => $id,
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    'photo' => $product->photo,
                ]
            ];
            Session::put('cart', $cart);
            return redirect()->back()->with('success', $product->name . ' added to cart');
        }

        //if cart is not empty
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            Session::put('cart', $cart);
            return redirect()->back()->with('success', $product->name . ' added to cart');
        }

        //add to cart with quantity=1
        $cart[$id] = [
            'id' => $id,
            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price,
            'photo' => $product->photo,
        ];

        Session::put('cart', $cart);
        return redirect()->back()->with('success', $product->name . ' added to cart');
    }

    public function updateCart(Request $request)
    {
        dd($request->all());
        if($request->id and $request->quantity)
        {
            $cart = Session::get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            Session::put('cart', $cart);
            Session::flash('success', 'Cart updated successfully');
        }
    }
    public function removeCart(Request $request)
    {
        if($request->id) {
            $product = Product::findOrFail($request->id);
            $cart = Session::get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                Session::put('cart', $cart);
            }
            Session::flash('success', $product->name . ' removed from cart');
        }
    }
}
