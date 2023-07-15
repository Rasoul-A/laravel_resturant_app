@extends('layouts.main')
@section('content')
        <h1>Update {{$category}} item page</h1>
        <a href="{{route('items.index')}}" class="btn btn-green to_right">Back</a>
        <form action="{{route('items.update',$item->id)}}" method="POST" class="create_form">
            @csrf
            @method('PUT')
            <div>
                <strong>Name:</strong>
                <input type="text" name="name" placeholder="Enter a name" value="{{$item->name}}">
            </div>
            <div>
                <strong>Ingredients:</strong>
                <textarea name="ingredients" placeholder="Ingredients?">{{$item->ingredients}}</textarea>
            </div>
            <div>
                <strong>Price:</strong>
                <input type="number" name="price" placeholder="500" value="{{$item->price}}">
            </div>
            <div>
                <strong>Count:</strong>
                <input type="number" name="count" placeholder=" 1, 2, ..." value="{{$item->count}}">
            </div>
            <input type="submit" value="Submit">
        </form>
@endsection
