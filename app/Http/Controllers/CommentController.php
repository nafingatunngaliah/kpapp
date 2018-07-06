<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use App\Http\Controllers\Controller;
use Image;

class CommentController extends Controller
{
    public function viewDetailPost($id_post)
    {
        $post = Post::find($id_post);
        $komen = Comment::get();
        return view('user.comment.view', ['post' => $post, 'komen' => $komen]);
    }

    public function addComment(Request $request, $id_post)
    {
        $komen['id_post']= $id_post;
        $komen['komentator'] = $request->komentator;
        $komen['komentar'] = $request->komentar;
        
        //dd($komen);
        Comment::create($komen);
        return back()
            ->with('success','Post submitted successfully.');
    }

}
