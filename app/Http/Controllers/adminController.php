<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class adminController extends Controller
{
    function login(){
        return view('adminlogin');
    }

    function login_submit(Request $request){
        $request->validate([
    		'username'=>'required',
    		'password'=>'required'
    	]);

    	$userCheck=admin::where(['username'=>$request->username,'password'=>$request->password])->count();
    	if($userCheck>0){
            $adminData=admin::where(['username'=>$request->username,'password'=>$request->password])->first();
            session(['adminData'=>$adminData]);
    		return redirect('/admin');
    	}else{
    		return redirect('/login')->with('error','Invalid username/password!!');
    	}
    }

    function dashboard(){
        $categories_raw = DB::table('categories')->count();
        $posts_raw = DB::table('posts')->count();
        return view('admin', [
            
            'categories_raw' => $categories_raw,
        
            'posts_raw' => $posts_raw,
        
        ]);
    }

    
 
}
