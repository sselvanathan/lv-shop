@extends('app')

@section('content')
    <div class="col-lg-3">
        <h1 class="my-4">Shoppex</h1>
        <div class="list-group">
            @foreach($categories as $category)
                <a class="list-group-item" href="/?category_id={{ $category->id }}">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
    @include('layouts.banner')
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="/?product_id={{ $product->id }}">´
                            <img class="card-img-top"
                                 @if ($product->photo) src="{{ Storage::url($product->photo)}}"
                                @else src="{{ asset('assets/no-image.png')}}"
                                 @endif
                                                                       alt="..."/></a>
                        <div class="card-body">
                            <h4 class="card-title"><a
                                    href="/?product_id={{ $product->id }}">{{ $product->name }}</a></h4>
                            <h5>{{ $product->price }} €</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <hr/>
                            Category: {{ $product->category->name }}
                        </div>
                        <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
