<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts=Post::all();
            return view('index',compact('posts'));
    }

    public function show()
    {
        $rowPost = Post::findOrFail();
            return view ('show',compact('rowPost'));
    }

    public function store(Request $request, Post $post){

        $request->validate([
            'content'=>'required',
        ]);

        $post = new Post([
            'title'=>$request->title,
            'content'=>$request->content,
            'image'=>$request->image,

            'user_id'=>auth()->id(),
        ]);

        return redirect()->route('show', $post->id)->with('sucess','Le post à ajouté avec succès.');
        
    } 
        public function create(){
            return view ('postAdd');
        }
}
