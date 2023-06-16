<?php
namespace App\Services;

use App\Http\Requests\RentalRequest;
use App\Models\Rental;
use Illuminate\Support\Facades\DB;

class RentalService {
    public function create(RentalRequest $request)
    {
        return DB::transaction(function () use ($request){
            return Rental::create($request->validated());
        });
    }
    public function destroy($rental)
    {
        return DB::transaction(function () use ($rental){
            return $rental->delete();
        });
    }
} 