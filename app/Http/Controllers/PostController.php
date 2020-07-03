<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Session;
use File;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add(){
        return view('backend.add_post');
    }
    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required|unique:posts',
            'description'=>'required',
            'section'=>'required',
            'status'=>'required',
            'type'=>'required'
        ]);
        $post=new Post;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->section=$request->section;
        $post->status=$request->status;
        $post->type=$request->type;
        if ($request->url!=NULL) {
            $post->url=$request->url;
        }else{
            $post->url=uniqid();
        }
        if ($request->hasFile('image')) {
            $image=$request->image;
            $image_new_name=time().$image->getClientOriginalName();
            $image->move('image/',$image_new_name);
            $post->image='image/'.$image_new_name;
        }
        $post->save();
        Session::flash('success','Post Added Successfully!!');
        return redirect()->route('post.show');
    }
    public function show(){
        $post=Post::all();
        return view('backend.show',compact('post'));
    }
    public function delete($id){
        $post=Post::find($id);
        if (File::exists('image/'.$post->image)){
            File::delete('image/'.$post->image);
        }
        $post->delete();
        Session::flash('success','Post Deleted Successfully');
        return redirect()->back();
    }
    public function update(Request $request,$id){
        $post=Post::find($id);

        $post->status=$request->status;

        $post->update();
        return redirect()->back();
    }
}
