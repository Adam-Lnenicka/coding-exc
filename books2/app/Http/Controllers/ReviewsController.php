<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Reviews;

class Reviewsontroller extends Controller
{
    //
    public function index()
    {
        $reviews = Reviews::get();
        return view('reviews/index');
    }

    public function create()
    {
        return view('reviews/create', compact('reviews'));
    }
    public function store($book_id, Request $request)
    {
        $book =Book::findOrFail($book_id);

        $review = new Review;
        $review->book_id = $book->id;
        $review->text->input('text');
        $review->rating->input('rating');
        $review->save();

        $this->validate($request, [
            'text' => 'required|max:255',
            'rating' => 'required|min:8',
            'email' => 'required|unique:users',
        ]);
    }

    public function show()
    {
        $reviewss = Reviews::get();
        return view('reviews/index');

    }
}
