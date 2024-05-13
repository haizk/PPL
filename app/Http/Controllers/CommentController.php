<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data jika diperlukan

        $comment = new Comment();
        $comment->video_id = $request->video_id;
        $comment->user_id = auth()->id();
        $comment->content = $request->response; // Sesuaikan dengan nama input pada formulir
        $comment->save();

        $slug = $comment->video->slug;

        // Redirect atau berikan respons sesuai kebutuhan aplikasi kamu
        return redirect()->route('dashboard.details', ['video' => $slug]);

    }
}
