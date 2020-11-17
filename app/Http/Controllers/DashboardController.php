<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Statuses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $books = Book::with('sales')->get();

        //return $draftStatus->id;
        return view('dashboard', compact('books'));
    }
}
