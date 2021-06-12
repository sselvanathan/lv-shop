@extends('app')

@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">Banner edit</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            Name:
            <br>
            <input type="text" name="name" value="{{ $banner->name }}" class="form-control"/>
            <br>
            <input type="file" name="photo"/>
            <br>
            <br>
            <input type="submit" class="btn btn-primary" value="Update">
            <br>
            <br>
        </form>
    </div>
@endsection
