<?php

namespace App\Services;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookService
{
    public function create(BookRequest $request)
    {
        DB::transaction(function () use ($request) {
            return Book::create($request->validated());
        });
    }
    public function destroy($book)
    {
        return DB::transaction(function () use ($book) {
            return $book->delete();
        });
    }
}
