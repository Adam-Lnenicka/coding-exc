<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Fecades\DB;
 
class TestController extends Controller

<?php 

use Illuminate\Http\Controllers;
use Illuminate\Support\Fecades\DB;

class TestController extends

{
    public function index()
    $books::select ()
}
{
    public function index()
    {
        // the logic of your api will be here
        $books =::select('SELECT*from`books` where `id` =?',[$id])
        $book =book[0]
        return :: Category ::where 

        return view ('books/index'), compact('books');

        return ('books/index')
        
    }

    public function index()
    {
        $category =DB::select('SELECT*FROM`categories` where')
        return view('eshop')
        return DB::('categories')->get();
        return DB::('categories')->where('id',$id)->get();
        return DB::('categories')->where('id',$id)->get();
        return DB::('categories')->where('id','=','1');
        return DB::('categories')->where()
    }
    return view('eshop/category', compact('category'))
    public function create()
    {
     
        $category = new Category;
        $category->name ='Romance';
        $category->save();

        return $category

    }
    public function create(){
        $category =new Category;
        $category->name='Romance';
        $category->save();
    }
    public function create(){
        $category =new Category;
        $category->name='Romance';
        $category->save();
    }
    public function store(){
        return 'hello world'
        
    }


}