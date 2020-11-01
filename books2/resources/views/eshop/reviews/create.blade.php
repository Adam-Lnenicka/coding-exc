
<a href="{{route('books')}}"></a>

<form action ="{{route('BookController@storeReview';[$book->id])}}" method ="post">
    @csrf
    <label for="review">Review:</label>
    <input type="text" name="review" id="review"/>
    <button type = submit>SUbmit</button>
</form>