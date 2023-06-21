<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $good = Good::where('id', $id)->first();
        $quantity = $request->input('quantity', 1);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'id' => $id,
                'name' => $good->naming,
                'price' => $good->price,
                'img_path' =>$good->img_path,
                'quantity' => $quantity
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function getCart() {
        $items = session()->get('cart', []);
        $isempty = 'Корзина';
        $toDisplay = '';
        if (empty($items)) {
            $isempty = 'Корзина порожня';
            $toDisplay = 'hidden';
        }
//        dd($items);
        return view('basket', ['items' => $items, 'isempty' => $isempty, 'toDisplay' => $toDisplay]);
    }

    public function clearCart()
    {
        session()->forget('cart');

        return redirect()->back()->with('success', 'Cart cleared successfully!');
    }

}
