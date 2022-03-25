<?php

namespace App\Http\Controllers;

use App\faskamar;
use Illuminate\Http\Request;

class faskamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faskamar = faskamar::latest()->paginate(5);
        return view('faskamar.index',compact('faskamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faskamar.create');
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
            'tipe_kamar' => 'required',
            'nama' => 'required',
        ]);

       
        // $mouseImage = new Image;
        // $mouseImage->imgname = $nameImage;
        // $mouseImage->normal_imgpath = $oriPath;
        // $mouseImage->thumbnail_imgpath = $thumbPath;
        // $mouseImage->save();

        faskamar::create([
            'tipe_kamar' => $request->tipe_kamar,
            'nama' => $request->nama
        ]);
        return redirect()->route('faskamar.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\faskamar  $faskamar
     * @return \Illuminate\Http\Response
     */
    public function show(faskamar $faskamar)
    {
        return view('faskamar.show',compact('faskamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\faskamar  $faskamar
     * @return \Illuminate\Http\Response
     */
    public function edit(faskamar $faskamar)
    {
        return view('faskamar.edit',compact('faskamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\faskamar  $faskamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faskamar $faskamar)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'nama' => 'required',
        ]);
        $faskamar->update($request->all());
        return redirect()->route('faskamar.index')->with('success','Fasilitas Kamar berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\faskamar  $faskamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(faskamar $faskamar)
    {
        $faskamar->delete();
        return redirect()->route('faskamar.index')->with('success','Fasilitas Kamar berhasil dihapus');
    }
}
