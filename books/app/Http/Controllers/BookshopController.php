<?php

namespace App\Http\Controllers;

use App\Models\Bookshop;
use Illuminate\Http\Request;

class BookshopController extends Controller
{
    //
    public function index()
    {
        $sss = DB::select('SELECT * from `books`');
        return view('bookshop/index',compact('sss'));
    }
    public function create()
    {
        return view('bookshop/create');
    }
    public function store(Request $request)
    {
        $input = new Bookshop;

        $input->name =$request->input('name');
        $input->city =$request->input('city'); 

        $input->save(); 

        return redirect(action('BookshopController@index'));
    }
}
