<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Services\BookService;
use App\Models\Author;
use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(BookRepository $bookRepository)
    {
        $books = $bookRepository->books();
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(BookRepository $bookRepository)
    {
        $authors = $bookRepository->authors();
        return view('admin.books.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request, BookService $bookService)
    {
        $bookService->create($request);
        return redirect(route('books.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book, BookService $bookService)
    {
        $bookService->destroy($book);
        return redirect()->route('books.index');
    }
}
