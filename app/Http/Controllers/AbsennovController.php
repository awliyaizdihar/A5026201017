<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsennovController extends Controller
{
    public function indexabsen()
    {
        // mengambil data dari table absen
        $absennov = DB::table('absennov')->get();

        // mengirim data absen ke view indexabsen
        return view('absennov.indexabsen', ['absennov' => $absennov]);
    }
    // method untuk menampilkan view form tambah absen
    public function add()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key
        // memanggil view add
        return view('absennov.add', ['pegawai' => $pegawai]);
    }
    // method untuk insert data ke table absen
    public function store(Request $request)
    {
        // insert data ke table absen
        DB::table('absennov')->insert([

            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/absennov');
    }
    // method untuk edit data absen
    public function edit($id)
    {
        // mengambil data absen berdasarkan id yang dipilih
        $absennov = DB::table('absennov')->where('ID', $id)->get();

        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

        $judul = "Hallo Apa kabar" ;

        // passing data absen yang didapat ke view update.blade.php
        return view('absennov.edit', ['absennov' => $absennov,'pegawai' => $pegawai , 'judul' => $judul]);
    }
    // update data absen
    public function update(Request $request)
    {
        // update data absen
        DB::table('absennov')->where('ID', $request->id)->update([

            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/absennov');
    }
    // method untuk hapus data absen
    public function hapus($id)
    {
        // menghapus data absen berdasarkan id yang dipilih
        DB::table('absennov')->where('ID', $id)->delete();

        // alihkan halaman ke halaman absen
        return redirect('/absennov');
    }
}
