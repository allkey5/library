<?php

namespace App\Repositories;

use App\Models\Book;
use App\Models\Category;
use App\Models\CategoryBook;

class CategoryBookRepository
{
    public function categorybooks()
    {
        return CategoryBook::paginate(10);
    }
    public function categories()
    {
        return Category::paginate(10);
    }
    public function books()
    {
        return Book::paginate(10);
    }
}
