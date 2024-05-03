<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function history()
    {
        $videos = \App\Models\Video::where('user_id', auth()->id())->get();
        return view('dashboard.history', ['videos' => $videos]);
    }
}
