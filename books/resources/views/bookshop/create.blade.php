<h1>Type your cities</h1>

<form action = "{{action('BookshopController@index')}}" method ="post">
    @csrf
    <label for ="name">Name: </label>
    <input type="text" id ="name" name ="name"></input>
    <label for ="city">City: </label>
    <input type="text" id ="name" name ="city"></input>
    <button type="submit">hi</button>
</form>