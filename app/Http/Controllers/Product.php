<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function all()
    {
        return view('products', [
            'products' => \App\Models\Product::query()->orderByDesc('products.created_at')->get()
        ]);
    }

    public function prod($slug)
    {
        return view('product', [
            'pro' => \App\Models\Product::query()->where('products.slug', $slug)->get()
        ]);
    }
}
