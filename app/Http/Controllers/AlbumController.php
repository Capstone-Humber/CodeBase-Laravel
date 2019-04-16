<?php

namespace App\Http\Controllers;

use App\Album;
use App\PhotoGalary;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album_array = Album::all();
        return view("album.index")->with('albums', $album_array);
    }


    public function albumView()
    {
        $album_array = Album::all();
        return view("album.album-client-index")->with('albums', $album_array);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("album.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' =>'required|min:3',
                'description' =>'required|min:5',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000'
            ]
        );
        $path = $request->file('image')->store('images', 'public');
        $request_data = $request->all();
        $request_data['image'] = $path;

        Album::create($request_data);
        return redirect('admin/album');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        $photo_galary_data = PhotoGalary::where('album_id', '=', $album->id)->get();

        $album_details = Album::find($album->id);
        return view('album.show')->with('album', $album_details)->with('photo_galary', $photo_galary_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $album_details = Album::find($album->id);
        return view('album.edit')->with('album', $album_details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $album->update($request->all());
        return redirect('admin/album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $product = Album::find($album->id)->delete();
        return redirect('admin/album');
    }
}
