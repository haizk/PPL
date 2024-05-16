<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function history()
    {
        if (auth()->user()->role === 'admin') {
            $videos = \App\Models\Video::orderBy('created_at', 'desc')->paginate(6);
        } else {
            $videos = \App\Models\Video::where('user_id', auth()->id())->orderBy('created_at', 'desc')->paginate(6);
        }

        return view('dashboard.history', ['videos' => $videos]);
    }

    public function details(\App\Models\Video $video)
    {
        $user = auth()->user();

        if ($user->id != $video->user_id && $user->role != 'admin') {
            abort(403);
        }

        $comments = Comment::where('video_id', $video->id)->orderBy('created_at', 'desc')->get();

        return view('dashboard.details', [
            'video' => $video,
            'comments' => $comments
        ]);
    }
}