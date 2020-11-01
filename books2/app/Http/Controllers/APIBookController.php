<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIBookController extends Controller
{
    //
    public function index()
    {
        $books = DB::select('SELECT * from `books` limit ? offset ?', [2, 1]);
        return $books;
        return 'Hello world';
    }
}
