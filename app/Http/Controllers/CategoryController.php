<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function addcategory(){
    	return view('posts.add_category');
    }

    public function storecategory(Request $request){

     $validatedData = $request->validate([
    'name' => ['required', 'unique:categories', 'max:25' ,'min:4'],
    'slug' => ['required', 'unique:categories', 'max:25' ,'min:4'],

    ]);

    	$data=array();
    	$data['name']=$request->name;
    	$data['slug']=$request->slug;

    	$category=DB::table('categories')->insert($data);

        if($category){
            $notification=array(
                'messege'=>'Successfully Catetory Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->route('all.category')->with($notification); 
          }else{
            $notification=array(
                'messege'=>'Something want wrong!',
                'alert-type'=>'error'
            );
            return Redirect()->route('all.category')->with($notification);
          }
    }


}
