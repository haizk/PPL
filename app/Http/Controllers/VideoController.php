<?php

namespace App\Http\Controllers;

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
        return view('dashboard.details', ['video' => $video]);
    }
}
