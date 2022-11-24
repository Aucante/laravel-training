<?php

namespace App\Manager;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\CommentRequest;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Str;

class CommentManager
{
    public function build(
        Comment $comment,
        CommentRequest $request,
        int $articleId,
        int $userId
    )
    {
        $comment->content = $request->input('content');
        $comment->article_id = $articleId;
        $comment->user_id = $userId;
        $comment->save();
    }
}
