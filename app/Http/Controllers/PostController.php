<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function add(){
    return view('backend.add_post');
   }
   public function store(Request $request){
    dd($request->all());
   }
}
