<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">

</head>
<body>
    <div class="container">
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
                        <a href="#" class="btn btn-light-blue">Show</a>
                        <a href="#" class="btn btn-blue">Edit</a>
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
    </div>
</body>
</html>
