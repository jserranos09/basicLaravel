<?php

namespace App\Http\Controllers;
// imports the database so we can use the variables there
use DB;
// uses the model Post
use App\Models\Post;

class PostsController extends Controller
{
    // slug is just the wildcard
    public function show($slug)
    {
        // From the databsase, selects from the posts table, where the slug column is equal to $slug and give the first result
        // another way is: $post = SELECT * FROM posts WHERE ($slug) VALUES (slug) LIMIT 1;
        // another way is: $post = DB::table('posts')->where('slug', $slug)->firstOrFail();
        // Post is the model
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
