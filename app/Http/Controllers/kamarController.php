<?php

namespace App\Http\Controllers;

use App\kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = kamar::latest()->paginate(5);
        return view('kamar.index',compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jumlah_awal = DB::table('kamar')->where('tipe_kamar', $request->tipe_kamar)->value('jml_kamar');
        // dd($jumlah_awal);
        
        $request->validate([
            'tipe_kamar' => 'required',
            'jml_kamar' => 'required',
            ]);

        DB::table('kamar')->where('tipe_kamar', $request->tipe_kamar)->update([
            'jml_kamar' => $jumlah_awal + $request->jml_kamar,
        ]);

        

            // kamar::create([
            //     'tipe_kamar' => $request->tipe_kamar,
            //     'jml_kamar' => $request->jml_kamar
            // ]);
        return redirect()->route('kamar.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(kamar $kamar)
    {
        return view('kamar.show',compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit(kamar $kamar)
    {
        return view('kamar.edit',compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kamar $kamar)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'jml_kamar' => 'required',
        ]);
        $kamar->update($request->all());
        return redirect()->route('kamar.index')->with('success','Data Kamar berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(kamar $kamar)
    {
        $kamar->delete();
        return redirect()->route('kamar.index')->with('success','Data Kamar berhasil dihapus');
    }
}
