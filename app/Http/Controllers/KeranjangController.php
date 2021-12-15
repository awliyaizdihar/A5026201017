<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
    public function index()
    {
        // mengambil data dari table keranjangbelanja
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        // mengirim data keranjangbelanja ke view index
        return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // method untuk menampilkan view form tambah keranjangbelanja
    public function tambah()
    {
        // memanggil view tambah
        return view('keranjangbelanja.tambah');
    }

    // method untuk insert data ke table keranjangbelanja
    public function store(Request $request)
    {
        // insert data ke table keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'ID' => $request->id,
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
        ]);
        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }

    // method untuk hapus data keranjangbelanja
    public function hapus($id)
    {
        // menghapus data keranjangbelanja berdasarkan id/kodepembelian yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }
}
