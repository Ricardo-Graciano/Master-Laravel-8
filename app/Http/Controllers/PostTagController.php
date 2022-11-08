<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class PostTagController extends Controller
{
    public function index($tagId)
    {
        $tag = Tag::findOrFail($tagId);

        return view('posts.index', [
            'posts' => $tag->blogPosts()->latestWithRelations()->get()
        ]);
    }
}
