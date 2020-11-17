<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'academic_year_id'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_orders')->withPivot('quantity');
    }

    public function status()
    {
        return $this->belongsToMany(Statuses::class, 'order_statuses', 'order_id', 'status_id');
    }

    public function scopeDraft($query){
        return $query->whereHas('status', function($query){
            $query->where('name', 'brouillon');
        });
    }

    public function scopeWaiting($query){
        return $query->whereHas('status', function($query){
            $query->where('name', 'en Attente');
        });
    }
}
