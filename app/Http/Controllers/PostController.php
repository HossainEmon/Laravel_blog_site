<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{

	public function writepost(){
    	$category=DB::table('categories')->get();
    	return view('writepost',compact('category'));
    }

    public function storepost(Request $request)
    {
    	$validatedData = $request->validate([
             'title' => 'required|max:200',
             'details' => 'required',
             'image' => 'required | mimes:jpeg,JPEG,jpg,png,PNG | max:1000',
         ]);

    	$data=array();
    	$data['title']=$request->title;
    	$data['category_name']=$request->category_name;
    	// $data['category_name']=3;
    	$data['details']=$request->details;

    	$image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/frontend/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            
            DB::table('posts')->insert($data);

             $notification=array(
                'messege'=>'Successfully Post Inserted',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
    	}else{
    		 DB::table('posts')->insert($data);
    		 $notification=array(
                'messege'=>'Successfully Post Inserted',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
    	}

    }
}
