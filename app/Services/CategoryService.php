<?php

namespace App\Services;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    public function create(CategoryRequest $request)
    {
        DB::transaction(function () use ($request) {
            return Category::create($request->validated());
        });
    }
    public function destroy($category)
    {
        DB::transaction(function () use ($category) {
            return $category->delete();
        });
    }
}
