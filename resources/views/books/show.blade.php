<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="{{route('books.index')}}">Back</a>
    <!-- {{$book}} -->

    <table border="1" width="300">
        <tr>
            <th>ID</th>
            <td>{{$book->id}}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{$book->title}}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{$book->author}}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{$book->isbn}}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{$book->stock}}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{$book->price}}</td>
        </tr>
    </table>

</body>
</html>