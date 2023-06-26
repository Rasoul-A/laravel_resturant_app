<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html{
            width: 100%;
            height: 100%;
        }
        body{
            width: 100%;
            height: 100%;
            background-color: rgb(215, 226, 176);
        }
        table,th,td{
            border: 2px solid black;
            border-collapse: collapse;
        }
        td,td{
            padding: 0.5rem 1rem;
        }
        table{
            width: 100%;
        }
        .table-small-col{
            width: 5%;
        }
        .table-medium-col{
            width: 23%;
        }
        .container{
            width: 70%;
            height: 80%;
            margin: 2rem auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }
        h1{
            text-align: center;
            align-self: flex-start;
            margin-bottom: 2rem;
        }
        a{
            text-decoration: none;
        }
        .btn{
            color: black;
            padding: 10px 20px;
            background-color: rgb(48, 104, 207);
            margin: 1rem 0;
            border-radius: 5%;
            /* display: inline; */
        }
        .btn-green{
            color: white;
            background-color: rgb(35, 117, 35);

        }
        .btn-green:hover{
            background-color: rgb(32, 56, 32);
        }
        .btn-red{
            color: white;
            background-color: rgb(168, 29, 29);

        }
        .btn-red:hover{
            background-color: rgb(54, 10, 12);
        }
        .btn-blue{
            color: white;
            background-color: rgb(43, 90, 192);

        }
        .btn-blue:hover{
            background-color: rgb(11, 48, 90);
        }
        .btn-yellow{
            color: black;
            background-color: rgb(195, 218, 116);

        }
        .btn-yellow:hover{
            background-color: rgb(113, 131, 49);
        }
        .btn-light-blue{
            color: black;
            background-color: rgb(53, 182, 199);

        }
        .btn-light-blue:hover{
            background-color: rgb(42, 109, 121);
        }
        .to_left{
            align-self: flex-end;
        }
        .actions-group{
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Food Categories</h1>
        <a href="#" class="btn btn-green to_left">Add new Category</a>
        <table>
            <tr>
                <th class="table-small-col">No</th>
                <th>Name</th>
                <th>Details</th>
                <th class="table-medium-col">Actions</th>
            </tr>
            <tr>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>
                    <div class="actions-group">
                        <a href="#" class="btn btn-light-blue">Show</a>
                        <a href="#" class="btn btn-blue">Edit</a>
                        <a href="#" class="btn btn-red">Delete</a>
                    </div>
                </td>
            </tr>
        </table>
        {{-- <form method="POST" action={{route()}} --}}
    </div>
</body>
</html>
