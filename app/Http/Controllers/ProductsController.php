<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Faker\Provider\Lorem;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::latest()->get();
        return view('welcome', ['products' => $products]);
    }

    public function show(Product $product) 
    {
        return view('products.show', ['product' => $product]);
    }
}
