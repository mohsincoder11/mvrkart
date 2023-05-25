<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderby('id','desc')->paginate(10);

        return view('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
            'description'=>'required',
            'link'=>'required'
        ]);

        $banner = new Banner;

        // Store image in folder
        $image = $request->file('banner_image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);

        // Save image path in database
        $banner->banner_image = $imageName;
        $banner->status = $validated['status'];
        $banner->description = $validated['description'];
        $banner->link = $validated['link'];
        $banner->save();

        return redirect()->route('banners.index')
                         ->with(['success'=>'Banner created successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        return view('banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
            'description' => 'required',
                        'link'=>'required'
        ]);

        if ($request->hasFile('banner_image')) {
            // Remove old image
            File::delete(public_path('images/' . $banner->banner_image));

            // Store new image
            $image = $request->file('banner_image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
            $banner->banner_image = $imageName;
        }

        $banner->status = $validated['status'];
        $banner->description = $validated['description'];
                $banner->link = $validated['link'];

        $banner->save();

        return redirect()->route('banners.index')
                         ->with(['success'=> 'Banner updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()->route('banners.index')
                         ->with(['error'=> 'Banner deleted successfully.']);
    }
}
