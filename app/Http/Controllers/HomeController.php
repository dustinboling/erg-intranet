<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $folders = DB::table('folders')
                        ->orderBy('name')
                        ->get();
        
        $announcements = DB::table('announcements')->latest()->get();
        
        return view('home', compact('announcements', 'folders'));
    }
}
