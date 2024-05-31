<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function upload(Request $request)
    {
        $user = auth()->user();
        $video = null;
        $comments = null;
        try {
            $request->validate([
                'file' => 'required|file|mimetypes:video/mp4,video/quicktime,video/webm,video/x-matroska',
            ]);

            $file = $request->file('file');

            $response = Http::asMultipart()->post('http://34.170.108.106:8000/predict/', [
                'body' => 'haizk',
                'file' => fopen($file->getRealPath(), 'r'),
            ]);

            $video = new \App\Models\Video();
            $video->user_id = auth()->id();
            $video->title = $file->getClientOriginalName();
            $video->path = $file->store('videos', 'public');
            $video->slug = pathinfo(str_replace('videos/', '', $video->path), PATHINFO_FILENAME);
            $video->result = $response->body();
            $video->save();

            $user = $video->user;
            $user_name = $user->name;
            $comments = Comment::where('video_id', $video->id)->get();
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }


        //return view('dashboard.details', ['result' => $response, 'video'=>$video]);
        return redirect()->route('dashboard.details', [
            'video' => $video,
        ]);
    }
}
