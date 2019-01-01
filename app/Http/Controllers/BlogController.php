<?php

namespace App\Http\Controllers;

use App\Settings;
use App\Category;
use App\Post;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('index')
                ->with('title', Settings::first()->site_name)
                ->with('categories', Category::take(5)->get())
                ->with('first_post', Post::orderBy('created_at', 'desc')->first());
    }
}

