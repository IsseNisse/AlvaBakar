@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @forelse ($orders as $order)
                <div class="card text-center mb-5">
                    <div class="card-header ">
                        <ul class="d-flex justify-content-between">
                            <li>

                            </li>
                            <li>
                                <h1 class="card-h1">{{ $order->name }}</h1>
                            </li>
                            <li class="d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="#E91E63" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="4" y1="7" x2="20" y2="7" />
                                    <line x1="10" y1="11" x2="10" y2="17" />
                                    <line x1="14" y1="11" x2="14" y2="17" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $order->phone_number }}</h5>
                        <p style="margin-top: 1em;">
                            @foreach ($order->products as $product)
                                <a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a>
                            @endforeach
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $order->created_at }}
                    </div>
                </div>
            @empty
                <p>Inga beställningar för tillfället</p>
            @endforelse
        </div>
    </div>

@endsection
