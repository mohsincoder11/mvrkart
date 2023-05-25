<?php

namespace App\Http\Controllers;

use App\Models\ManageVideo;
use Illuminate\Http\Request;
use App\Models\ManageImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ManageVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = ManageVideo::all();

        return view('manageimage.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'videoURL' => 'required',
        ]);

        ManageVideo::create($request->all());

        return back()
            ->with(['success'=> 'Video url created successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManageVideo  $manageVideo
     * @return \Illuminate\Http\Response
     */
    public function show(ManageVideo $manageVideo)
    {

        return view('manageimage.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageVideo  $manageVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageVideo $manageVideo)
    {

        return view('manageimage.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageVideo  $manageVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageVideo $manageVideo)
    {
        $request->validate([
            'videoURL' => 'required',
        ]);

        $video->update($request->all());

        return redirect()->route('manageimage.index')
            ->with(['success'=> 'Video updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageVideo  $manageVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manageVideo = ManageVideo::find($id);
        $manageVideo->delete();

        return redirect()->route('manageimage.index')
            ->with(['error'=> 'Video URL deleted successfully.']);
    }
}
