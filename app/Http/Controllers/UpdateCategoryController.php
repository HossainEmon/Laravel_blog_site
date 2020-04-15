<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UpdateCategoryController extends Controller
{
    public function updatecategory(Request $request,$id){
	    	  $validatedData = $request->validate([
	    'name' => ['required', 'unique:categories', 'max:25' ,'min:4'],
	    'slug' => ['required', 'unique:categories', 'max:25' ,'min:4'],

	    ]);

	    	$data=array();
	    	$data['name']=$request->name;
	    	$data['slug']=$request->slug;

	    	$category=DB::table('categories')->where('id',$id)->update($data);

	        if($category){
	            $notification=array(
	                'messege'=>'Successfully Catetory Updated',
	                'alert-type'=>'success'
	            );
	            return Redirect()->route('all.category')->with($notification); 
	          }else{
	            $notification=array(
	                'messege'=>'Noting to Updated!',
	                'alert-type'=>'error'
	            );
	            return Redirect()->route('all.category')->with($notification);
          }
    }
}
