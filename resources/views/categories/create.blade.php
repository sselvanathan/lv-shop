@extends('app')

@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">New Category</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    Name:
    <br>
    <input type="text" name="name" class="form-control"/>
    <br>
    <input type="submit" class="btn btn-primary" value="Save">
    <br>
    <br>
</form>
    </div>
@endsection
