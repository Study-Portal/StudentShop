<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cart extends Controller
{
    public function view()
    {
        return view('cart');
    }

    public function add($slug, Request $request)
    {
        \App\Models\Cart::query()->create(
            [
                'user_id' => auth()->id(),
                'product_id' => \App\Models\Product::query()->where('slug', $slug)->first('id')->id,
                'quantity' => '1'
            ]
        )->save();

        return redirect(route('cart'));
    }
}
