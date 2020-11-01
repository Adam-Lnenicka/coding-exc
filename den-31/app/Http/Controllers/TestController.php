<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Fecades\DB;
 
class TestController extends Controller
{
    public function index()
    {
        // the logic of your api will be here
        $name ='Joe';
        $surname ='Doe';

        return view('test/test')->('user',$name)->('surname', $surname);


    }
}