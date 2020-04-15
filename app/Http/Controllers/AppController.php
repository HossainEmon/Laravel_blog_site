<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;


class AppController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function about(){
    	return view('about');
    }

    

    public function contact(){
    	return view('contact');
    }

    public function welcome(){
    	$post=DB::table('posts')->join('categories','posts.category_name','categories.id')
    	->select('posts.*','categories.name','categories.slug')->paginate(2);
    	return view('welcome',compact('post'));
    }
}
