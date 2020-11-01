<h1>Index of bookshops</h1>

@foreach ($bookshops as $bookshop)
    <h2>{{ $bookshop->name }}</h2>
    <p>{{ $bookshop->city }}</p>
@endforeach






<h1>hi there</h1>

@foreach ($bookshops as $b)
<h2>{{$b->'name'}}</h2>
<h2>{{$b->'city'}}</h2>


@endforeach












