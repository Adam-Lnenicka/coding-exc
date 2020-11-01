<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookshopController extends Controller
{
    //
    public function index()
    {
        $bookDatabase = 
        return view('bookshop');
        
    }
    public function create()
    {
        return view('bookshops/create');
    }
    public function store()
    {
        $book = new Book
        $book->name=$request->input('name')
        $book->city=$request->input('city')
        $book->save();
        
    }
}
