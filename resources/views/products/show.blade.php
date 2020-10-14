@extends ('/layouts.app')

@section ('content')
<div class="row row-cols-1 row-cols-md-4 d-flex justify-content-center">
        <div class="card h-100">
        <img src="{{ $product->img_path }}" class="card-img-top img-fluid h-50" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->body }}</p>
                </div>
        </div>
    </div>
@endsection