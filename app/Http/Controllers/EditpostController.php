<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EditpostController extends Controller
{
    public function EditPost($id){
    	$category=DB::table('categories')->get();
    	$post=DB::table('posts')->where('id',$id)->first();

    	return view('posts.edit_post',compact('category','post'));
    }
}
