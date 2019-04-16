<?php

namespace App\Http\Controllers;

use App\PhotoGalary;
use Illuminate\Http\Request;

class PhotoGalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($album_id)
    {
        return view('photo-galary.create')->with('album_id', $album_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'image_title' => 'required',
            'image_description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ]);
        $path = $request->file('image')->store('images', 'public');
        $request_data = $request->all();
        $request_data['image'] = $path;
        PhotoGalary::create($request_data);
        return redirect("admin/album/" .$request_data['album_id']);

    }

    public function photo($album_id)
    {
        $galleries = PhotoGalary::where('album_id', '=', $album_id)->get();

        $data['galleries'] = $galleries;
    	return view('gallery.photo',$data);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\PhotoGalary  $photoGalary
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoGalary $photoGalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PhotoGalary  $photoGalary
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoGalary $photoGalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PhotoGalary  $photoGalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhotoGalary $photoGalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PhotoGalary  $photoGalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoGalary $photoGalary)
    {
        //
    }
}
