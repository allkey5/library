<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'book_id',
        'is_rented',
        'rented_to',
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function book()
    {
        return $this->hasOne(Book::class);
    }
}
