<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AllcategoryController extends Controller
{
    public function allcategory(){

    	$category=DB::table('categories')->get();

    	return view('posts.all_category', compact('category'));
    }
}
