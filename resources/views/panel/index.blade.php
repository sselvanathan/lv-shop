@extends('app')

@section('content')
            <div class="col-lg-3">
                <h1 class="my-4">Control Panel</h1>
                <div class="list-group">
                        <a class="list-group-item" href="{{ route('products.index') }}">Products</a>
                        <a class="list-group-item" href="{{ route('categories.index') }}">Categories</a>
                </div>
            </div>
@endsection

