<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts=Post::paginate(4);;
            return view('index',compact('posts'));
    }

    public function show(Post $post)
    {
        $comments= Comment::where('post_id',$post->post_id);
        return view ('show',compact('comments','post'));
        // $rowPost = Post::findOrFail();
        //     return view ('show',compact('rowPost'));
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
        $post->save();
        return to_route('publication')->with('sucess','Le post à ajouté avec succès.');
        
    } 
        public function create(){
            return view ('postAdd');
        }
}
