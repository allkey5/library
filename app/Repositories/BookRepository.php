<?php
namespace App\Repositories;

use App\Models\Author;
use App\Models\Book;

class BookRepository {
    public function authors()
    {
        return Author::paginate(10);
    }
    public function books()
    {
        return Book::paginate(10);
    }
}