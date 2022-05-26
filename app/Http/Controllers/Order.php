<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order extends Controller
{
    public function view()
    {
        return view('orders', [
            'all' => \App\Models\Order::query()->where('orders.user_id', auth()->id())->orderByDesc('created_at')->get()
        ]);
    }
}
