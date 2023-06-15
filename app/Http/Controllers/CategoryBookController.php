<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryBookRequest;
use App\Services\CategoryBookService;
use App\Models\Book;
use App\Models\Category;
use App\Models\CategoryBook;
use App\Repositories\CategoryBookRepository;
use Illuminate\Http\Request;

class CategoryBookController extends Controller
{
    public function index(CategoryBookRepository $categoryBookRepository)
    {
        $categorybooks = $categoryBookRepository->categorybooks();
        $books = $categoryBookRepository->books();
        $categories = $categoryBookRepository->categories();
        return view('admin.categorybooks.index', compact('categorybooks', 'categories', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CategoryBookRepository $categoryBookRepository)
    {
        $categorybooks = $categoryBookRepository->categorybooks();
        $books = $categoryBookRepository->books();
        $categories = $categoryBookRepository->categories();
        return view('admin.categorybooks.create', compact('categorybooks', 'categories', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryBookRequest $request, CategoryBookService $categoryBookService)
    {
        $categoryBookService->create($request);
        return redirect(route('admin.categorybooks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryBook $categoryBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryBook $categoryBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryBook $categoryBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryBook $categoryBook, CategoryBookService $categoryBookService)
    {
        $categoryBookService->destroy($categoryBook);
        return redirect(route('categorybooks.index'));
    }
}
