<?php

namespace App\Http\Controllers;
use App\Models\ManageVideo;
use Illuminate\Http\Request;
use App\Models\ManageImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ManageImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manage_images = ManageImage::paginate(10);
        $videos = ManageVideo::all();
        return view('manageimage.index', compact('manage_images','videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manageimage.create');

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
            'Gallery_Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Status' => 'required|in:active,inactive',
        ]);

        $manage_image = new ManageImage;

        // Store image in folder
        $image = $request->file('Gallery_Image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('imagesManage'), $imageName);

        // Save image path in database
        $manage_image->Gallery_Image = $imageName;
        $manage_image->Status = $validated['Status'];
        $manage_image->save();

        return redirect()->route('manageimage.index')
        ->with(['success'=>'Image added successfully.']);

    }



    public function show1(ManageVideo $manageVideo)
    {
        return view('manageimage.show1', compact('video'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manage_image = ManageImage::findOrFail($id);
        return view('manageimage.show',compact('manage_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit1(ManageVideo $manageVideo)
     {
         return view('manageimage.edit', compact('video'));
     }


    public function edit($id)
    {
        $manage_image = ManageImage::find($id);
        return view('manageimage.edit',compact('manage_image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Gallery_Image' => 'required',
            'Status' => 'required',
        ]);

        $manage_image = ManageImage::findOrFail($id);
        $manage_image->Status = $request->input('Status');

        if($request->hasFile('Gallery_Image')){
            $image = $request->file('Gallery_Image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('imagesManage'), $imageName);
            File::delete(public_path('imagesManage/'.$manage_image->Gallery_Image));
            $manage_image->Gallery_Image = $imageName;
        }

        $manage_image->save();

        return redirect()->route('manageimage.index')
            ->with(['success'=>'Image updated successfully.']);
    }

    public function update1(Request $request, ManageVideo $manageVideo)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroy($id)
     {
         $manage_image = ManageImage::find($id);
         $manage_image->delete();
         return redirect()->route('manageimage.index')->with(['error'=> 'Item deleted successfully.']);
     }

}
