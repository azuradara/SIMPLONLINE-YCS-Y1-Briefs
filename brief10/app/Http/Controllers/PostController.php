<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getUserPosts(Request $request)
    {
        $response = [
            "data" => $request->user()->posts()->get()->toArray(),
            "error" => null
        ];

        return response($response, 200);
    }

    public function getAll()
    {
        $response = [
            "data" => Post::with('comments')->paginate(10),
            "error" => null
        ];

        return response($response, 200);
    }

    public function create(Request $request)
    {
        $request->validate([
            "title" => ['required', 'max:128'],
            "content" => ['required', 'max:2000'],
        ]);

        $post = $request->user()->posts()->create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        $response = (bool)$post
            ? response([
                "data" => $post,
                "error" => null
            ], 201)
            : response([
                "data" => null,
                "error" => "Could not create post."
            ]);

        return $response;
    }

    public function delete(Request $request, $id)
    {
        if (!$request->user()->is_moderator())
            return response(["error" => "Unauthorized"], 401);

        $rm = Post::where(['id' => $id])->delete();

        $response = (bool)$rm
            ? response([
                "data" => "Post deleted.",
                "error" => null
            ], 202)
            : response([
                "data" => null,
                "error" => "Could not delete post."
            ], 422);

        return $response;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => ['max:128'],
            "content" => ['max:2000'],
        ]);

        $post = $request->user()->posts()->where(["id" => $id]);

        foreach ($request->all() as $k => $v) {
            $post->update(["$k" => $v]);
        }

        $response = (bool)$post
            ? response([
                "data" => $post,
                "error" => null
            ], 201)
            : response([
                "data" => null,
                "error" => "Could not edit post."
            ], 422);

        return $response;
    }
}