@extends('layouts.main')
@section('content')
        <h1>{{$category}} Items</h1>
        <a href="{{route('items.create')}}" class="btn btn-green to_left">Add new Item</a>
        <table>
            <tr>
                <th class="table-small-col">No</th>
                <th>Name</th>
                <th>Ingredients</th>
                <th>Price</th>
                <th>Count</th>
                <th class="table-medium-col">Actions</th>
            </tr>
            @foreach ($collection as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->ingredients}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->count}}</td>
                <td>
                    <div class="actions-group">
                        <form action="{{route('items.destroy',$item->id)}}" method="POST">
                        <a href="#" class="btn btn-light-blue">Show</a>
                        <a href="{{route('items.edit',$item->id)}}" class="btn btn-blue">Edit</a>
                        <button type="submit" class="btn btn-red">Delete</a>
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        {{-- <form method="POST" action={{route()}} --}}
@endsection
