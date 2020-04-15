<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AllpostController extends Controller
{
    public function AllPost(){
    	//$post=DB::table('posts')->get();
    	$post=DB::table('posts')
    			->join('categories','posts.category_name','categories.id')
    			->select('posts.*','categories.name')
    			->get();
    	return view('posts.all_post',compact('post'));
    }

    public function ViewPost($id){
    	$post=DB::table('posts')
    			->join('categories','posts.category_name','categories.id')
    			->select('posts.*','categories.name')
    			->where('posts.id',$id)
    			->first();
    		return view('posts.view_post',compact('post'));
    }
}
