<?php

namespace App\Services;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingService
{
    public function create($request)
    {
        $data = [
            'user_id' => auth('user')->user()->id,
            'book_id' => $request->book_id,
            'is_booked' => 1,
        ];
        return DB::transaction(function () use ($data) {
            return Booking::create($data);
        });
    }
    public function destroy($booking)
    {
        return DB::transaction(function () use ($booking) {
            return $booking->delete();
        });
    }
}
