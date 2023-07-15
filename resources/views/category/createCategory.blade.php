@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>Create category page</h1>
        <a href="{{route('categories.index')}}" class="btn btn-green to_right">Back</a>
        <form action="{{route('categories.store')}}" method="POST" class="create_form">
            @csrf
            <div>
                <strong>Name:</strong>
                <input type="text" name="name" placeholder="Enter a name">
            </div>
            <div>
                <strong>Details:</strong>
                <textarea name="detail" placeholder="Any details?"></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection
