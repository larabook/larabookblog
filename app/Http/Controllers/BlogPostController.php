<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogPostController extends Controller
{
    public function all()
    {
        $allPosts = BlogPost::all();

        return view("blogpost\all")->with("blogposts", $allPosts);
    }

    /**
     * redirect user to the page for creating new blog post.
     * @return mixed
     */
    public function create()
    {
        return view('blogpost.create');
    }

    /**
     * store blog post information into corresponding table.
     * @param Request $request
     */
    public function store(Request $request)
    {
        $blogPost = new BlogPost();
        $blogPost->title = $request->get('title');
        $blogPost->body = $request->get('body');
        
        $blogPost->save();

        return view('blogpost.all')->with('blogposts', BlogPost::all());
    }
}
