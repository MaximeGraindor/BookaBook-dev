<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Statuses;
use Livewire\WithPagination;

class ShowStudents extends Component
{

    use WithPagination;

    public $name;

    protected $queryString = [
        'name',
    ];

    public function render()
    {

        $allUser = User::with('orders.books.sales', 'orders.status')
            ->where('name', 'LIKE', '%'.$this->name.'%')
            ->paginate(10);

        $statusList = Statuses::where('name', '!=', 'Brouillon')->get();

        return view('livewire.show-students',
            [
                'users' => $allUser,
                'statusList' => $statusList
            ]);
    }
}
