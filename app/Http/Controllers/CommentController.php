<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;

class CommentController extends Controller
{
    public function viewComment($id_post)
    {
        $post = Post::find($id_post);
        return view('user.comment.view', ['post' => $post]);
    }
}
