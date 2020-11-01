<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller
{
    //
    public function index()
    {
        $user =\Auth::user();

        return view('dummy', compact('user'));
    }

    public function edit($id)
    {
        $book =Book::findOrFail($id)

        return view('admin.books.edit',compact($book))
    }

    punlic function index()
    {
        $books = Book::orderBy('id')->();

        return view('admin.books.index')

        @extends('admin.there.main')
        @set_exception_handler('content')
        @endsection
    }
}
{{route('admin.books.update',$book->is_dir)}}



<able>
    @forrach($books as $book)

        <tr>
            <td><a href="{{route($book->id}}</td>
          <td><a href="({{}})" 
           
            <td><a href="{{route($book->title}}</td>
        </tr>


<form action {{inde}}
    @endforeach
</table>






$this->validate($request,[
    'title'=>'required',
    'title'=>'requi'
])














