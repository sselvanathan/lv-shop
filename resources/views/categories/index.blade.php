@extends('app')

@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">Categories</h1>
<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th></th>
    </tr>
    @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
            </td>
        </tr>
    @endforeach
    </thead>
</table>
    </div>
@endsection
