<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class FoldersController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folders = Folder::all()->where('folder_id', '==', null);

        return view('folders.index', compact('folders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function show(Folder $folder)
    {
        $notes = $folder->notes;
        $media = $folder->getMedia();

        $images = collect();
        $docs = collect();
        $audio = collect();

        foreach ($media as $mediaItem) {

            switch ($mediaItem->getTypeFromMime()) {
                case 'image':
                    $images->push($mediaItem);
                    break;

                case 'other':
                    if($mediaItem->getExtensionAttribute() == 'mp3')
                    {
                        $audio->push($mediaItem);
                        break;
                    }

                default:
                    $docs->push($mediaItem);
                    break;
            }

            // if ($mediaItem->getTypeFromMime() === "image")
            //     $images[] = $mediaItem;
            // else
            //     $docs[] = $mediaItem;

        }

        return view('folders.show', compact('folder', 'notes', 'images', 'audio', 'docs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function edit(Folder $folder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Folder $folder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Folder $folder)
    {
        //
    }
}
