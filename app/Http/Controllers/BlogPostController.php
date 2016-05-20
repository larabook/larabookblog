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
}
