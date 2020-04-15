<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EditCategoryController extends Controller
{
    public function editcategory($id){
    	$category=DB::table('categories')->where('id',$id)->first();
    	return view('posts.edit_category',compact('category'));
    }
}
