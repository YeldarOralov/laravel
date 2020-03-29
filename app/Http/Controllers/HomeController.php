<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request){
        return view('index', ['books'=>Book::all()]);
    }

    function editPage(Book $book){
        return view('edit', ['book'=>$book]);
    }

    function edit(Request $request, Book $book){
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'year' => 'required',
            'rating' => 'required'
        ]);

        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->year = $request->input('year');
        $book->rating = $request->input('rating');
        $book->save();
        return redirect('/');
    }


    function createPage(Request $request){
        $request;
        return view('create');
    }

    function create(Request $request){
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'year' => 'required',
            'rating' => 'required'
        ]);
        $newBook = new Book($request->except('_token'));
        $newBook->save();
        return redirect('/');
    }

    function delete(Request $request, Book $book){
        $book->delete();
        return redirect('/');
    }
}
