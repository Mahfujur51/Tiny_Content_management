<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post=Post::all();
        $s1_post=Post::Where('section',1)->get();
        $s2_post=Post::Where('section',2)->get();
        $uppost=Post::where('status',0)->get();
        return view('home',compact('s1_post','post','s2_post','uppost'));

    }
}
