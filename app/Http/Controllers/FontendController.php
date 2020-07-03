<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FontendController extends Controller
{
    public function index(){
        $section_one_post=Post::OrderBy('id','desc')->where('section','1')->where('status',1)->take(4)->get();
        $section_one_latest=Post::latest()
        ->where('section','1')
        ->first();
        $section_two_post=Post::OrderBy('id','desc')->where('section','2')->where('status',1)
        ->take(4)->get();
        $section_two_latest=Post::latest()
        ->where('section','2')
        ->first();
        return view('welcome',compact('section_one_post','section_one_latest','section_two_latest','section_two_post'));
    }
    public function single($id){
        $post=Post::find($id);
        return view('single',compact('post'));
    }
}
