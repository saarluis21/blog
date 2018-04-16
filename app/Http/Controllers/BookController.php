<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function llistar() {

      $books = Book::all();
      return view('books.books')->with('books', $books);

    }

    public function create(Request $request) {

      $request->validate([

        'title' => 'required|min:3|max:50',
        'ISBN' => 'required|digits:13'

      ]);

      dd($request->title,$request->ISBN);



    }
}
