@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Beställ</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="/img/mums.jpg" class="card-img-top img-fluid h-50" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="/img/bullar.jpg" class="card-img-top img-fluid h-50" alt="...">
                    <a class="stretched-link link-style" href="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="/img/tosca.jpg" class="card-img-top img-fluid h-50" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
