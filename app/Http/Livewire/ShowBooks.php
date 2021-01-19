<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class ShowBooks extends Component
{

    public $name;

    protected $queryString = [
        'name',
    ];

    public function render()
    {

        $allBooks = Book::query()
            ->where('name', 'LIKE', '%'.$this->name.'%')
            ->get();

        return view('livewire.show-books',
            [
                'books' => $allBooks
            ]
        );
    }
}
