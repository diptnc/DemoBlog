<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\True_;

class addpostController extends Controller
{
    function index(){
        $categories_raw = DB::table('categories')->get();
        $posts_raw = DB::table('posts')->count();
        return view('addpost', [
            
            'categories_raw' => $categories_raw,
        
            'posts_raw' => $posts_raw,
        
        ]);
    }

    function addpost( Request $request){
        
        $title=$request->title;
        $content=$request->content;
        $cat=$request->cat;
        if(  DB::insert('insert into posts (title, Description,cat_id,user_id) values (?, ?,?,?)', [$title, $content,$cat,1])){
            $status=true;
        }
        else{
            $status=false;
        }
      

        return view('addpoststatus',['status'=>$status]);
    }
}
