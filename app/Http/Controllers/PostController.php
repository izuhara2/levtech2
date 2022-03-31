<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
<<<<<<< HEAD
   public function index(Post $post)
    {
       return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
/**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }   
<<<<<<< HEAD
}
=======
}

>>>>>>> 4ee560f05a887bac67ca51e2f40c90d3db15abee
=======
   public function index()
    {
        $post=new Post;
        return view('posts/index')->with(['test' => $post->getPaginateByLimit()]);  
    }
}
>>>>>>> refs/remotes/origin/master
