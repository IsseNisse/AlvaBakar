@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="text-center">Beställ</h1>
            </div>
                @auth
                @if (\Request::is('/'))
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus ml-auto" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#E91E63" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                @endif
                @endauth
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
