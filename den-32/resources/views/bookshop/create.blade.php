<h1>Create new book</h1>
<form action="{{ action('BookshopController@store') }}" method="post">
    @csrf
    <p>
        <label for="name">Name:</label>
        <input id="name" type="text" name="name"/>
    </p>
    <p>
        <label for="city">City:</label>
        <input id="city" type="text" name="city"/>
    </p>
    <button type="submit">Create</button>
</form>


<h1>Hi there</h1>
<form action="{{'action(BookshopController@index')}}" method="post">
@csrf
    <p>
        <label for = "name">Name:</label>
        <input type ="text" name ="name" id ="name"/>
    </p>
    <p>
        <label for = "name">City:</label>
        <input type ="text" name ="city" id ="city"/>
    </p>
    <button type ="submit"></button>
</form>











