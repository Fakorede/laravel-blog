<?php

namespace App\Http\Controllers;

use App\Settings;
use App\Category;
use App\Post;
use App\Tag;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('index')
                ->with('title', Settings::first()->site_name)
                ->with('categories', Category::take(5)->get())
                ->with('first_post', Post::orderBy('created_at', 'desc')->first())
                ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
                ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
                ->with('php', Category::find(2))
                ->with('laravel', Category::find(3))
                ->with('vue', Category::find(4))
                ->with('settings', Settings::first());
    }

    public function singlePost($slug) {
        $post = Post::where('slug', $slug)->first();

        // next post
        $next_id = Post::where('id', '>', $post->id)->min('id');

        // prev post
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('post')->with('post', $post)
                            ->with('title', $post->title)
                            ->with('settings', Settings::first())
                            ->with('categories', Category::take(5)->get())
                            ->with('next', Post::find($next_id))
                            ->with('prev', Post::find($prev_id))
                            ->with('tags', Tag::all());
    }
}

