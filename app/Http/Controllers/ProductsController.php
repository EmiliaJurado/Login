<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function products()
    {
        $products =  Product::all();

        return view('products', compact('products'));
    }
    public function detail($id)
    {
        $product = Product::find($id);
        return view('detail')->with('product', $product);
    }
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {

        //Logica para agregar producto

        $product = Product::find($id);
        $cart = session()->get('cart');

        //Logica para agregar producto

        $product = Product::find($id);
        $cart = session()->get('cart');

        //Si el carrito está vacío, este es el primer producto

        if(!$cart){

            $cart = [
                      $id=> [
                        "name" => $product->name,
                        "quantity"=> 1,
                        "price" => $product->price,
                        "photo"=> $product->photo
                      ]

            ];

            session()->put('cart',$cart);
            return redirect()->back()->with('success','Product added to cart successfully!');

        }

        //Si el carrito no está vacío, verifique si este producto existe la cantidad de incremento
        if(isset($cart[$id])){

            $cart[$id]['quantity']++;

            session()->put('cart',$cart);

            return redirect()->back()->with('success','Product added to cart successfully');
            
        }

        //Si el artículo no existe en el carrito, agregar al carrito cantidad -1
        $cart[$id] = [
            "name"=>$product->name,
            "quantity"=> 1,
            "price"=>$product->price,
            "photo"=>$product->photo
        ];

        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product added to cart successfully');


    }
}
