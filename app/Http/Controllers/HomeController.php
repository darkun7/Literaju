<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }
    public function getMasukPage()
    {
      return view('pages.masuk');
    }
    public function getDaftarPage()
    {
      return view('pages.daftar');
    }
    public function getAktivitasPage()
    {
      return view('pages.aktivitas');
    }
    public function getKegiatanPage()
    {
      return view('pages.kegiatan');
    }
    public function getKegiatan2Page()
    {
      return view('pages.kegiatan2');
    }
    public function getGaleriPage()
    {
      return view('pages.galeri');
    }


    public function getUserPage()
    {
      return view('pages.user');
    }
    public function getDonasiPage()
    {
      return view('pages.donasi');
    }

    public function getAdminPage()
    {
      return view('pages.admin');
    }
}
