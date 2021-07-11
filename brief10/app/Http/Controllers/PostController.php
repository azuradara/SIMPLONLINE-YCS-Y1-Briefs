<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getUserPosts(Request $request, $id)
    {
        $response = [
            "data" => User::where(["id" => $id])->posts()->get()->toArray(),
            "error" => null
        ];

        return response($response, 200);
    }

    public function getAll()
    {
        $posts = Post::orderby('created_at')->get();

        $data = $posts->map(function ($post) {

            $comments = $post->comments->map(function ($comment) {
                return [
                    'id' => $comment->id,
                    'user' => $comment->user->name,
                    'content' => $comment->content,
                    'updated_at' => $comment->updated_at
                ];
            });

            return [
                'id' => $post->id,
                'title' => $post->title,
                'content' => $post->content,
                'user' => $post->user->name,
                'user_id' => $post->user_id,
                'updated_at' => $post->updated_at,
                'comments' => $comments
            ];
        });

        $response = [
            "data" => $data,
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
        if (
            !$request->user()->is_moderator() ||
            !$request->user()->posts()->where(["id" => $id])->first()
        )
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