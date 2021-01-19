<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'name',
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function publishers()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
