<?php

namespace App\Http\Controllers;
use DB;
use App\tamu;
use Illuminate\Http\Request;

class tamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function superior()
    {
        $faskamar = DB::table('faskamar')->where('tipe_kamar', 'superior')->get();
        // dd($faskamar);
        // dd($superior, $deluxe);
        return view('Template.tamkam', compact('faskamar'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deluxe()
    {
        $faskamar = DB::table('faskamar')->where('tipe_kamar', 'deluxe')->get();
        // dd($faskamar);
        return view('Template.tamkam', compact('faskamar'));
        
    }


    public function fasilitashotel( )
    {
        $fashotel = DB::table('fashotel')->get();

        return view('fashotel.tampilanhotel', compact('fashotel'));
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
     * @param  \App\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function show(tamu $tamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function edit(tamu $tamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tamu $tamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(tamu $tamu)
    {
        //
    }
}
