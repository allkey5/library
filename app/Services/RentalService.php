<?php
namespace App\Services;

use App\Http\Requests\RentalRequest;
use App\Models\Rental;
use Illuminate\Support\Facades\DB;

class RentalService {
    public function create($book, $request)
    {
        $data = [
            'user_id' => auth('user')->user()->id,
            'book_id' => $book->id,
            'is_rented' => 1,
            'rented_to' => $request->rented_to,
        ];
        return DB::transaction(function () use ($data){
            return Rental::create($data);
        });
    }
    public function destroy($rental)
    {
        return DB::transaction(function () use ($rental){
            return $rental->delete();
        });
    }
} 