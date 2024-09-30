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
        $books = Book::whereBetween('price', [10, 15])
                ->where('stock', '>', 0)
                ->orderBy('price')
                ->get();
        
        return view("books.index")->with("books", $books);
    }
}
