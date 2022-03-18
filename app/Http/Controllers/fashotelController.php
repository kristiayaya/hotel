<?php

namespace App\Http\Controllers;

use App\fashotel;
use Image;
use Illuminate\Http\Request;

class fashotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fashotel = fashotel::latest()->paginate(5);
        return view('fashotel.index',compact('fashotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fashotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'keterangan' => 'required',
        ]);

        $image = $request->file('image');
        $nameImage = $request->file('image')->getClientOriginalName();

        $thumbImage = Image::make($image->getRealPath())->resize(100, 100);
        $thumbPath = public_path() . '/thumbnail_images/' . $nameImage;
        $thumbImage = Image::make($thumbImage)->save($thumbPath);

        $oriPath = public_path() . '/normal_images/' . $nameImage;
        $oriImage = Image::make($image)->save($oriPath);

        // $mouseImage = new Image;
        // $mouseImage->imgname = $nameImage;
        // $mouseImage->normal_imgpath = $oriPath;
        // $mouseImage->thumbnail_imgpath = $thumbPath;
        // $mouseImage->save();

        fashotel::create([
            'nama' => $request->nama,
            'image' => $nameImage,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('fashotel.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fashotel  $fashotel
     * @return \Illuminate\Http\Response
     */
    public function show(fashotel $fashotel)
    {
        return view('fashotel.show',compact('fashotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fashotel  $fashotel
     * @return \Illuminate\Http\Response
     */
    public function edit(fashotel $fashotel)
    {
        return view('fashotel.edit',compact('fashotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fashotel  $fashotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fashotel $fashotel)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required',
            'keterangan' => 'required',
        ]);
        $fashotel->update($request->all());
        return redirect()->route('fashotel.index')->with('success','Fasilitas Hotel berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fashotel  $fashotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(fashotel $fashotel)
    {
        $fashotel->delete();
        return redirect()->route('fashotel.index')->with('success','Fasilitas Hotel berhasil dihapus');
    }
}
