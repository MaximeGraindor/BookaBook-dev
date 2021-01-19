<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookOrder extends Model
{
    use HasFactory;

    protected $table = 'book_orders';

    public function books()
    {
        return $this->belongsTo(Book::class);
    }

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }


}
