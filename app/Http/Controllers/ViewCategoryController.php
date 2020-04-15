<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ViewCategoryController extends Controller
{
   public function viewcategory($id){

   	$category=DB::table('categories')->where('id',$id)->first();

   	return view('posts.view_category',compact('category'));

   }
}
