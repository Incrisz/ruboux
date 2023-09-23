<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use Illuminate\Http\Request;
use File;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banners::orderBy('created_at', 'desc')->get();
        return view('dashboard.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.banner.add-banner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Banners();
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->image = $request->image;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('dist/img/banners', $filename);
            $banner->image = $filename;
         }
        //dd($banner);
        $banner->save();
       return redirect()->route('banner.index')->with('success', 'Banner added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banners $banners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banners = Banners::findOrFail($id);
        return view('dashboard.banner.edit', compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banners $banners, $id)
    {
        $title = $request->title;
        $description = $request->description;
        $image = $request->image;
      
        if($request->hasfile('image'))
        {
            $filepath_image = 'dist/img/banners/'.$banners->image;
            if(File::exists($filepath_image)){
                File::delete($filepath_image);
            }
            $image_file = $request->file('image');
            $img_extension = $image_file->getClientOriginalExtension();
            $img_filename = time().'.'. $img_extension;
            $image_file->move('dist/img/banners', $img_filename );
            $image = $img_filename;
        }
        Banners::find($id)->update([
            'title'=>$title,
            'image'=>$image,
            'description'=>$description,
        ]);
        return redirect()->route('banner.index')->with('success', 'Banner updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Banners::find($id)->delete();
        return redirect()->route('banner.index')->with('Success', 'Banner deleted successfully');
    }
}
