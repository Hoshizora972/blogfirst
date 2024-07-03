<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    public function store(Request $request, Post $post){

        $request->validate([
            'content'=>'required',
        ]);

        $comment=new Comment([
            'content'=>$request->content,
            'user_id'=>auth()->id(),
        ]);

        $post->comments()->save($comment);
        return redirect()->route('show', $post->id)->with('sucess','Commentaire ajouté avec succès.');
    }
}
