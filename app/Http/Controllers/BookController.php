<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // return 'Hello from index';

        //load data from database
        $books = Book::paginate((10));
        
        return view("books.index")->with("books", $books);
    }
    public function show($id)
    {
        // return 'showing ' . $id;
        $book = Book::find($id);

        return view("books.show")->with("book", $book);
    }
}
