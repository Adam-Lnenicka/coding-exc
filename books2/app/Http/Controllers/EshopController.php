<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Subcategory;
use App\Models\Category;

class EshopController extends Controller
{
    public function index()
    {
        $books      = DB::select('SELECT * FROM `books`');
        $categories = DB::select('SELECT * FROM `categories`');

        return view('eshop/index', compact('books', 'categories'));
    }

}