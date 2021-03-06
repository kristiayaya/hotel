<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $super = DB::table('kamar')->where('tipe_kamar', 'Superior')->value('jml_kamar');
        $delux = DB::table('kamar')->where('tipe_kamar', 'Deluxe')->value('jml_kamar');

        return view('welcome', compact('super', 'delux'));
    }
    public function home()
    {
        return view('home');
    }
}
