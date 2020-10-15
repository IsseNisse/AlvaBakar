<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Faker\Provider\Lorem;

class ProductsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
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

    public function store() 
    {
        $this->validateProduct();
        
        $product = new Order(request(['name', 'phone_number']));
        // $product->user_id = 1;
        $product->save();

        $product->products()->attach(request('products'));

        return redirect(route('welcome'));
        
    }

    protected function validateProduct()
    {
        return request()->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'product' => 'exists:products,id'
        ]);
    }
}
