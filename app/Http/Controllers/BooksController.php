<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function dashboard()
    {
        $data = Book::get();
        return view('dashboard', compact('data'));
    }

    public function maintenance()
    {
        $data = Book::get();
        return view('maintenance', compact('data'));
    }

    public function addBook()
    {
        return view('add-book');
    }

    public function saveBook(Request $request)
    {
        $request->validate([
            'booktitle' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'yearpublished' => 'required',
            'volume' => 'required',
        ]);

        $booktitle = $request->booktitle;
        $publisher = $request->publisher;
        $author = $request->author;
        $yearpublished = $request->yearpublished;
        $volume = $request->volume;

        $book = new Book();
        $book->BookTitle = $booktitle;
        $book->Publisher = $publisher;
        $book->Author = $author;
        $book->YearPublished = $yearpublished;
        $book->Volume = $volume;
        $book->save();

        return redirect()->back()->with('success', 'Success: Book Added Succesfully');
    }

    public function editBook($id)
    {
        $data = Book::where('id', '=', $id)->first();
        return view('edit-book', compact('data'));
    }

    public function updateBook(Request $request)
    {
        $request->validate([
            'booktitle' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'yearpublished' => 'required',
            'volume' => 'required',
        ]);

        $id = $request->id;
        $booktitle = $request->booktitle;
        $publisher = $request->publisher;
        $author = $request->author;
        $yearpublished = $request->yearpublished;
        $volume = $request->volume;

        Book::where('id', '=', $id)->update([
            'booktitle' => $booktitle,
            'publisher' => $publisher,
            'author' => $author,
            'yearpublished' => $yearpublished,
            'volume' => $volume
        ]);
        return redirect()->back()->with('success', 'Success: Book Updated Succesfully');
    }

    public function deleteBook($id)
    {
        Book::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Success: Book Deleted Succesfully');
    }

    public function viewBook($id)
    {
        $data = Book::where('id', '=', $id)->first();
        return view('view-book', compact('data'));
    }
}
