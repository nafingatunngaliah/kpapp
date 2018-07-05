<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests;
class IndexController extends Controller
{
    public function index()
    {
    	$post = Post::orderBy('id','asc')->get();
 
    	
        
        return view('index',['post' => $post]);

    }
}
