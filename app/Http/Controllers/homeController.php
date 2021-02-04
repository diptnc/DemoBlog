<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class homeController extends Controller
{
  function index(){
    $post_raw = DB::table('posts')
    ->orderBy('id', 'desc')
    ->get();

return view('welcome',["post_raw"=>$post_raw]);

  }

  function postview($id){
    $post_raw = DB::select("select * from posts where id = $id");

return view('postlayout',["post_raw"=>$post_raw]);

  }
}
