@extends('layouts.main')
@section('content')
        <h1>Create {{$category}} item page</h1>
        <a href="{{route('items.index')}}" class="btn btn-green to_right">Back</a>
        <form action="{{route('items.store')}}" method="POST" class="create_form">
            @csrf
            <div>
                <strong>Name:</strong>
                <input type="text" name="name" placeholder="Enter a name">
            </div>
            <div>
                <strong>Ingredients:</strong>
                <textarea name="ingredients" placeholder="Ingredients?"></textarea>
            </div>
            <div>
                <strong>Price:</strong>
                <input type="number" name="price" placeholder="500">
            </div>
            <div>
                <strong>Count:</strong>
                <input type="number" name="count" placeholder=" 1, 2, ...">
            </div>
            <div>
                <select name="category_id">
                    @foreach ($allCategories as $cat)
                    <option value="{{$cat->cat_id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Submit">
        </form>
@endsection
