<h1><h1>

<a href= "{{action('EshopController@index')}}">
<a href ="{{}}"
<h1>Hi there this is a category</h1>

<ul>
    @foreach($category as $c)
        <li>{{$c->category}}</li>
    @foreachend
</ul>