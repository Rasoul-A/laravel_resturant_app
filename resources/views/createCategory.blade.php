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
</body>
</html>
