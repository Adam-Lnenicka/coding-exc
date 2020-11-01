
    <a href="{{action('CategoryController@edit',[$category->id])}}"><a>
    <form action ="{{action('CategoryController@destroy', [$category->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <input type ="submit" value="Delete">
    </form>

    <a href="{{action('CategoryController@edit', [$category->id])}}">Update</a>
    <form action ="{{ action('CategoryCOntroller@destroy', [$category->id]) }}">
@endforeach

