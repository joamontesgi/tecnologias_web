<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthorBook;
use App\Models\Author;
use App\Models\Book;


class AuthorBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        $books = Book::all();
        $authorBooks = AuthorBook::all();
        return view('author_books.index', compact('authorBooks', 'authors', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $authorBook = new AuthorBook();
        $authorBook->author_id = $request->author_id;
        $authorBook->book_id = $request->book_id;
        $authorBook->save();
        return redirect()->route('authors_books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
