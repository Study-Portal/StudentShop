<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Product extends Controller
{
    public function all()
    {
        return view('products', [
            'products' => \App\Models\Product::query()->orderByDesc('products.created_at')->paginate(12)
        ]);
    }

    public function prod($slug)
    {
        return view('product', [
            'prod' => \App\Models\Product::query()->where('products.slug', $slug)->first()
        ]);
    }
}
