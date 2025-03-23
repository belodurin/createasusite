<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showOrderForm(Solution $solution)
    {
        return view('orders.create', compact('solution'));
    }

    public function submitOrder(Request $request, Solution $solution)
    {
        $request->validate([
            'quantity' => 'required|numeric|min:1',
        ]);

        $totalPrice = $solution->price * $request->quantity;

        Order::create([
            'user_id' => Auth::id(),
            'solution_id' => $solution->id,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        return redirect()->route('shop')->with('success', 'Order placed successfully.');
    }
}
