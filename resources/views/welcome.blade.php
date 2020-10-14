@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="">
                <h1 class="text-center">Beställ</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                @foreach ($products as $product)
                <div class="col mb-4">
                    <div class="card h-100">
                    <img src="{{ $product->img_path }}" class="card-img-top img-fluid h-50" alt="...">
                    <a class="stretched-link text-decoration-none text-dark" href="/products/{{ $product->id }}">
                            <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->body }}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
