<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DeletepostController extends Controller
{
    public function DeletePost($id){
    	$post=DB::table('posts')->where('id',$id)->first();
    	$image=$post->image;

    	$delete=DB::table('posts')->where('id',$id)->delete();
    	if($delete){
    		unlink($image);
   		 $notification=array(
                'messege'=>'Successfully post Deleted',
                'alert-type'=>'success'
            );
         return Redirect()->back()->with($notification);
    	}else{
    		 $notification=array(
                'messege'=>'Something want wrong',
                'alert-type'=>'error'
            );
         return Redirect()->back()->with($notification);
    	}
    }
}
