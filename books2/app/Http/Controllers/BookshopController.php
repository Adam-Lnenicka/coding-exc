<?php

namespace App\Http\Controllers;
use App\Models\Subcategory;



use Illuminate\Http\Request;

class BookshopController extends Controller
{
    //
    public function index()
    {
     $bookshop = Subcategory::get();
     return $bookshop;
     
    }

}
