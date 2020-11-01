

<h2>books eshop</h2>

<h2>books eshop</h2>
@foreach($books as $b)
<li>{{$b->title}}</li>
<h2>{{$b->author}}</h2>
<p>{{$b->author}}</p>
@endforeach

<h2>hi there</h2>
@foreach($books as $book)
    <li>{{$books->title}}</li>
    <li>{{$books->author}}</li>
    <li>{{$books->authos}
@endforeach

public function store(Request $request)
{
    $name =$request->input('name');

    $category = new Category;
    $category->name=$name;
    $category->save();

    return $category;
}

