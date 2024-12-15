<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::latest()->paginate(10);
        return view('dashboard.books.index', [
            'books' => $books,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'published_at' => 'required',
            'cover' => 'nullable|image',
        ]);
        $data['slug'] = Str::slug($data['title']);
        // dd($data);
        Book::create($data);
        return redirect()->route('books.index')->with('success', 'Book created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        return view('books.show', [
            'book' => $book,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('dashboard.books.edit', [
            'book' => $book,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'published_at' => 'required',
            'cover' => 'nullable|image',
            'status' => 'required',
        ]);
        $data['slug'] = Str::slug($data['title']);
        $requestFile = $request->file("cover");
        if ($request->hasFile(key: "cover")) {
            Storage::delete("public/" . $book->cover);
            $data["cover"] = $requestFile->store("images/cover", "public");
        } else {
            $data["cover"] = $book->cover;
        }
        $book->update($data);
        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Storage::delete("public/" . $book->cover);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}