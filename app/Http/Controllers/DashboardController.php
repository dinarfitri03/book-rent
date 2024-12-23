<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $bookCount = Book::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        return view('dashboard', ['book_count' => $bookCount, 'category_count' => $categoryCount, 
        'user_count' => $userCount]);
    }
}