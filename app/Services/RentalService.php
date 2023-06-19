<?php
namespace App\Services;

use App\Http\Requests\RentalRequest;
use App\Models\Rental;
use Illuminate\Support\Facades\DB;

class RentalService {
    public function create($request)
    {
        $data = [
            'user_id' => auth('user')->user()->id,
            'book_id' => $request,
            'is_rented' => 1,
            'rented_to' => $request->date,
        ];
        dd($data);
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