<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getUserComments(Request $request)
    {
        return response([
            "data" => $request->user()->comments()->get()->toArray(),
            "error" => null
        ], 200);
    }

    public function getPostComments(Request $request, $id)
    {
        $comments = Comment::where(["post_id" => $id])->get();

        return (bool)$comments
            ? response([
                "data" => $comments,
                "error" => null
            ], 200)
            : response([
                "data" => null,
                "error" => "Could not retrieve comments."
            ], 404);
    }

    public function create(Request $request)
    {

        $request->validate([
            "content" => ['required', 'max:1000'],
            "post_id" => ['required', 'exists:posts,id']
        ]);

        $comment = $request->user()->comments->create([
            "content" => $request->content,
            "post_id" => $request->post_id
        ]);

        return (bool)$comment
            ? response([
                "data" => $comment,
                "error" => null
            ], 201)
            : response([
                "data" => null,
                "error" => "Could not post comment."
            ], 422);
    }

    public function delete(Request $request, $id)
    {
        if (
            $request->user()->is_moderator() ||
            $request->user()->comments()->where(["id" => $id])->first()
        )
            return response(["error" => "Unauthorized"], 401);

        $rm = Comment::where(['id' => $id])->delete();

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
            "content" => ['max:800'],
        ]);

        $comment = $request->user()->comments()->where(["id" => $id]);

        $comment->update(["content" => $request->content]);

        $response = (bool)$comment
            ? response([
                "data" => $comment,
                "error" => null
            ], 201)
            : response([
                "data" => null,
                "error" => "Could not edit comment."
            ], 422);

        return $response;
    }
}