<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $topLevelFolders = Folder::where('folder_id', NULL)
            ->orderBy('name', 'asc')
            ->get();
        $latestFolders = Folder::latest()
            ->take(10)
            ->orderBy('name', 'asc')
            ->get();
        $announcements = Announcement::latest()
            ->take(10)
            ->get();

        return view('home', compact('topLevelFolders', 'latestFolders', 'announcements'));
    }
}
