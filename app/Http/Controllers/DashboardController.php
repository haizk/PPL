<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
         $totalVideos = Video::count();

        return view('dashboard', compact('totalVideos'));

    }
}
