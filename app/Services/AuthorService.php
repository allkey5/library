<?php

namespace App\Services;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class AuthorService
{
    public function create(AuthorRequest $request)
    {
        return DB::transaction(function () use ($request) {
            return Author::create($request->validated());
        });
    }
    public function destroy($author)
    {
        return DB::transaction(function () use ($author) {
            return $author->delete();
        });
    }
}
