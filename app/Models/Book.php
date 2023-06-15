<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'author_id',
        'publishing_house',
        'year_of_publishing',
        'isbn',
        'cover',
        'availability',
    ];
    public function bookings()
    {
        return $this->hasOne(Booking::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
    public function categories()
    {
        return $this->belongsToMany(category::class, 'category_books', 'book_id', 'category_id');
    }
}
