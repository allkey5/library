<?php
namespace App\Repositories;

use App\Models\Author;

class AuthorRepository {
    public function authors() {
        return Author::paginate(10);
    }
}