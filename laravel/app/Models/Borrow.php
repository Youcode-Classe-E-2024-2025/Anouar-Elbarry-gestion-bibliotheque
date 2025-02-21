<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Borrow extends Model
{
    // Specify the table name explicitly (optional, but good practice)
    protected $table = 'borrows';

    // Specify which fields can be mass assigned
    protected $fillable = [
        'user_id', 
        'book_id', 
        'borrow_date'
    ];

    // Specify date fields to be automatically cast
    protected $dates = ['borrow_date'];

    // Optional: If borrow_date is stored as a string, add a mutator
    public function getBorrowDateAttribute($value)
    {
        return Carbon::parse($value);
    }

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}