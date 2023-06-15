<?php

namespace App\Services;

use App\Http\Requests\CategoryBookRequest;
use App\Models\CategoryBook;
use Illuminate\Support\Facades\DB;

class CategoryBookService
{
    public function create(CategoryBookRequest $request)
    {
        DB::transaction(function () use ($request) {
            return CategoryBook::create($request->validated());
        });
    }
    public function destroy($categoryBook)
    {
        DB::transaction(function () use ($categoryBook) {
            return $categoryBook->delete();
        });
    }
}
