@extends('books.layout')


@section('page-content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <p class="text-end">
        <a class="btn btn-primary" href="{{route("books.create")}}">New Book</a>
    </p>    
    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Detals</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td><a href="{{route('books.show', $book->id)}}"> Details</a></td>
        </tr>
        @endforeach
    </table>

    {{$books->links()}}

@endsection
