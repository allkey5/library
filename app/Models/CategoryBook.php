<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'book_id',
    ];
    public $timestamps = false;
}
