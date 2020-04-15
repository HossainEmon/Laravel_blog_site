<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DeleteCategoryController extends Controller
{
    public function deletecategory($id){
    	$dalete=DB::table('categories')->where('id',$id)->delete();

   		 $notification=array(
                'messege'=>'Successfully Catetory Deleted',
                'alert-type'=>'success'
            );
         return Redirect()->back()->with($notification); 
    }
}
