@extends('app')

@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">New Banner</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            Name:
            <br>
            <input type="text" name="name" class="form-control"/>
            <br>
            Photo:
            <br>
            <input type="file" name="photo"/>
            <br>
            <br>
            <input type="submit" class="btn btn-primary" value="Save">
            <br>
            <br>
        </form>
    </div>
@endsection
