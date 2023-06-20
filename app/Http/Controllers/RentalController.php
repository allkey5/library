<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentalRequest;
use App\Models\Book;
use App\Models\Booking;
use App\Models\Rental;
use App\Services\RentalService;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Book $book)
    {
        return view('user.rentals.create', compact("book"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Book $book, Request $request, RentalService $rentalService)
    {
        // dd($data);
        $existingBooking = Booking::where('book_id', $book->id)->first();
        $existingRental = Rental::where('book_id', $book->id)->first();
        if (!$existingBooking && !$existingRental){
            $rentalService->create($book, $request);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RentalRequest $request, RentalService $rentalService)
    {
        // $rentalService->create($request);
        return redirect(route('books.page'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        //
    }
}
