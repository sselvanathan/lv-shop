@extends('app')

@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">Banners</h1>

        <a href="{{route('banners.create')}}" class="btn btn-info">New Banner</a>
        <br>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
            @foreach ($banners as $banner)
                <tr>
                    <td>{{ $banner->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('banners.edit', $banner->id) }}">Edit</a>

                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display: inline">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                    </td>
                </tr>
            @endforeach
            </thead>
        </table>
    </div>
@endsection
