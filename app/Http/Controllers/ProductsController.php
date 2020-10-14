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

    public function index(Product $product)
    {
        return view('welcome', ['product' => $product]);
    }

    public function show(Product $product) 
    {
        return view('products.show', ['product' => $product]);
    }
}
