<?php

namespace App\Http\Controllers;
use DB;
use App\reservasi;
use Illuminate\Http\Request;

class reservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $reservasi = reservasi::latest()->paginate(5);
        return view('reservasi.index',compact('reservasi'));
    }

    public function cari(Request $request )
    {
        
        $reservasi = DB::table('reservasi')->where('nama_tamu', $request->cari)->get();
        return view('reservasi.index',compact('reservasi'));
    }


    public function filtering(Request $request)
    {
        // dd($request->tgl_cekin);
        $reservasi = DB::table('reservasi')->where('tgl_cekin', $request->tgl_cekin)->get();
        return view('reservasi.index',compact('reservasi'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $id = auth()->user()->id;
        
        $jumlah_awal = DB::table('kamar')->where('tipe_kamar', $request->tipe_kamar)->value('jml_kamar');

        // dd($id);
        
        $request->validate([
            'tgl_cekin' => 'required',
            'tgl_cekout' => 'required|after_or_equal:tgl_cekin',
            'jml_kamar' => 'required',
            'nama_pemesan' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'nama_tamu' => 'required',
            'tipe_kamar' => 'required',
        ]);

        // DB::table('kamar')->where('tipe_kamar', $request->tipe_kamar)->value

        if($request->jml_kamar >= $jumlah_awal){
            
            return redirect()->route('beranda');
            
        } else {
            
            reservasi::create([
                'tgl_cekin' => $request->tgl_cekin,
                'tgl_cekout' => $request->tgl_cekout,
                'jml_kamar' => $request->jml_kamar,
                'nama_pemesan' => $request->nama_pemesan,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'nama_tamu' => $request->nama_tamu,
                'tipe_kamar' => $request->tipe_kamar,
                'status' => 'a',
                'id_user' => $id,
            ]);

            DB::table('kamar')->where('tipe_kamar', $request->tipe_kamar)->update([
                'jml_kamar' => $jumlah_awal - $request->jml_kamar
            ]);

        }
        

        return redirect()->route('datareservasi')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function show(reservasi $reservasi)
    {
        return view('reservasi.show',compact('reservasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit(reservasi $reservasi)
    {
        return view('reservasi.edit',compact('reservasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservasi $reservasi)
    {
        $request->validate([
            'tgl_cekin' => 'required',
            'tgl_cekout' => 'required',
            'jml_kamar' => 'required',
            'nama_pemesan' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'nama_tamu' => 'required',
            'tipe_kamar' => 'required',
        ]);

        $reservasi->update($request->all());
        return redirect()->route('reservasi.index')->with('success','Data Reservasi berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservasi $reservasi)
    {
        $reservasi->delete();
        return redirect()->route('reservasi.index')->with('success','Data Reservasi berhasil dihapus');




        // $awal = DB::table('reservasi')->where('id', $reservasi)
    }

    public function checkin($id)
    {

        // dd($id);

        DB::table('reservasi')->where('id', $id)->update([

            'status' => 'b'

        ]);
        
        return redirect()->route('reservasi.index');
        
    }

    public function checkout($id)
    {

        // dd($id);

        DB::table('reservasi')->where('id', $id)->update([

            'status' => 'c'

        ]);

        $jumlah_awal = DB::table('reservasi')->where('id', $id)->value('jml_kamar');

        $tipe_kamar = DB::table('reservasi')->where('id', $id)->value('tipe_kamar');
        
        $jumlah_kamar = DB::table('kamar')->where('tipe_kamar', $tipe_kamar)->value('jml_kamar');

        
        $jumlah_akhir = $jumlah_awal + $jumlah_kamar;
        
        DB::table('kamar')->where('tipe_kamar', $tipe_kamar)->update([
            'jml_kamar' => $jumlah_akhir
        ]);
        
        return redirect()->route('reservasi.index');
        
    }
    public function batal($id)
    {

        $jumlah_awal = DB::table('reservasi')->where('id', $id)->value('jml_kamar');

        $tipe_kamar = DB::table('reservasi')->where('id', $id)->value('tipe_kamar');
        
        $jumlah_kamar = DB::table('kamar')->where('tipe_kamar', $tipe_kamar)->value('jml_kamar');

        
        $jumlah_akhir = $jumlah_awal + $jumlah_kamar;
        
        // dd($jumlah_akhir);

        DB::table('reservasi')->where('id', $id)->update([

            'status' => 'd',
            'jml_kamar' => $jumlah_akhir

        ]);
        
        return redirect()->route('reservasi.index');
        
    }
    public function cetak(Request $id)
    {
        $print = DB::table('reservasi')->where('id', $id->id)->get();
        return view('reservasi.cetak', compact('print'));
    }
}
