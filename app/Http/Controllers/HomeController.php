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
        $folders = Folder::orderBy('name', 'asc')->get();
        $announcements = Announcement::latest()->get();

        return view('home', compact('announcements', 'folders'));
    }
}
