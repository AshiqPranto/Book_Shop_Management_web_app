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
    public function create()
    {
        return view("books.create");
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $rules = [
            "title"=> "required",
            "author"=> "required",
            "isbn"=> "required|size:13",
            "stock"=> "required|numeric|integer|gte:0",
            "price"=> "required|numeric|gte:0",
        ];
        $request->validate($rules);

        // the attribute name must be identical with database attributes name. Only then following line will work.
        $book = Book::create($request->all());
        return redirect()->route("books.show", $book->id);
    }
    public function destroy(Request $request, $id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route("books.index");
    }
}
