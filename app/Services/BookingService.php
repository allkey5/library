<?php

namespace App\Services;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingService
{
    public function create(BookingRequest $request)
    {
        return DB::transaction(function () use ($request) {
            return Booking::create($request->validated());
        });
    }
    public function destroy($booking)
    {
        return DB::transaction(function () use ($booking) {
            return $booking->delete();
        });
    }
}
