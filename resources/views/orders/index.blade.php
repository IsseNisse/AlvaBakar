@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @forelse ($orders as $order)
                <div id="content">
                    <div class="name">
                        <h2>{{ $order->name }}</h2>
                    </div>
                    {{ $order->phone_number }}
                    <p style="margin-top: 1em;">
                        @foreach ($order->products as $product)
                    <a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a>
                        @endforeach
                    </p>
                </div>
            @empty
                <p>Inga beställningar för tillfället</p>
            @endforelse
        </div>
    </div>
@endsection