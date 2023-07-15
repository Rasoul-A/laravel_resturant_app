@extends('layouts.main')
@section('content')
        <h1>Food Categories</h1>
        <a href="{{route('categories.create')}}" class="btn btn-green to_left">Add new Category</a>
        <table>
            <tr>
                <th class="table-small-col">No</th>
                <th>Name</th>
                <th>Details</th>
                <th class="table-medium-col">Actions</th>
            </tr>
            @foreach ($collection as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->details}}</td>
                <td>
                    <div class="actions-group">
                        <form action="{{route('categories.destroy',$item->id)}}" method="POST">
                        <a href="{{route('categories.show',[$item->cat_id,'category_name'=>$item->name])}}" class="btn btn-light-blue">Show</a>
                        <a href="{{route('categories.edit',$item->id)}}" class="btn btn-blue">Edit</a>
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
