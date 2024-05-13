<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function history()
    {
        $videos = \App\Models\Video::where('user_id', auth()->id())->paginate(3);
        return view('dashboard.history', ['videos' => $videos]);
    }

    public function details(\App\Models\Video $video)
    {
        $user = auth()->user();

        if ($user->id != $video->user_id && $user->role != 'admin') {
            abort(403);
        }

        $comments = Comment::where('video_id', $video->id)->get();

        return view('dashboard.details', [
            'video' => $video,
            'comments' => $comments
        ]);
    }
}
