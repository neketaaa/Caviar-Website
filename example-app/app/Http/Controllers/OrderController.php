<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function showOrder() {
        $items = session()->get('cart', []);
        $total = 0;
        foreach ($items as $item) {
            $total += (int)$item['price'] * (int)$item['quantity'];
        }
        return view('/order', ['items'=>$items, 'total'=>$total]);
    }

    public function proceedOrder(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'delivery' => 'required|in:np,pickup,courier',
        ]);
        $validatedData['isCompleted'] = false;
        $cart = session()->get('cart', []);

        $order = Order::create($validatedData);

        foreach ($cart as $good_id => $details) {
            $order->goods()->attach($good_id, ['quantity' => $details['quantity']]);
        }
        session()->forget('cart');
        return view('proceeded');
    }

    public function DisplayOrder($id)
    {
        $order = Order::with('goods')->find($id);

        if($order) {
            dd($order);
}}}
