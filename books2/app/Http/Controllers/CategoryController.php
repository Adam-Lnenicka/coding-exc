<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // get all categories
        $categories = Category::where('id', '>', 0)->get();

        if($categories->count() === 0){
            return 'no categories';
        }

        return view('categories/index') compact(categories;
    }



public function show($id)
{
  $category =Category::findOrFail($id);
  return view("categoryries/show", compact('category'))  
}


    public function show($id)
    {
//        return Category::where('id', $id)->first();
//        return Category::find($id);


//        $name = 'Sci-Fi & Fantasy';
//        return Category::where('name', $name)->first();
//        return Category::where('name', $name)->firstOrFail();


//        $category = Category::find($id); // get first Category with `id` = $id
//
//        if($category === null){
//            return '404';
//        }

        $category = Category::findOrFail($id);

        return $category;
    }

    public function create()
    {
        return view('categories/create');
    }

    public function store(Request $request)
    {
//        $name = $_POST['name'];
        $name = $request->input('name');

        $category = Category::where('name', $name)->first();

        if($category === null){

            $category = new Category;
            $category->name = $name;
            $category->save();
        }

        return $category;
    }
    public function show($id)
    {
        $category= Category::CategoryfindOrfail($id);

        return('categories/show', compact('category'));
    }
    public function store(Request $request)
    {   
        $this->validate($request[
            'name' => 'required|string|min:3|max:200'
        ])
        $category = new Category;
        $category->name =$request->input('name');
        $category->save();    
    }

    public function store(Request $request)
    {
        $this->validate($request[
            'name' => 'required|max:280|string|min:2|'
        ])






$this->validate($request[


])

        $category = new Category;
        $category->name = $request->input('name');
        $category->save();

    }


    public function edit($id)
    {
        $category = Category::findOrFail($id)
        return view('categories/edit' compact('category'))
    }
    public funstion update($id)
        $category =Category:: findOrFail($id)

        return redirect(action('CategoryController@index'));
}
    public function destroy($id)
    {
        $category =Category::findOrFail($id);

        $category->delete();

        return redirect(action('CategotyController@index'));
    }

    public function edit()
    {
        $category =Category::findOrFail($id)
        return view('categories/update')
    }
    public function destroy($id)
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(action('CategoryController@index'));
    public function destroy($id)
        {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect(action('CategoryController@index'));
        }
} 