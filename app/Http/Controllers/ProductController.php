<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Pastikan model Product sudah dibuat

class ProductController extends Controller
{
    //
    public function index()
{
    $products = Product::all();
    return view('product', compact('products'));
}

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }
}
