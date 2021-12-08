<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{

    //menampilkan data absen
    public function index()
    {
        //mengambil data dari tabel absen
        $absen = DB::table('absen')->get();
        //mengirim data tabsen ke view index
        return view('absen.index', ['absen' => $absen]);
    }

    //menampilkan view form tambah absen
    public function tambah()
    {
        //mengambil data pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        //memanggil view tambah sekaligus mengirim data pegawai
        return view('absen.tambah', ['pegawai' => $pegawai]);
    }

    //insert data ke tabel absen
    public function store(Request $request)
    {
        //insert data ke dalam tabel absen
        DB::table('absen')->insert([
            'ID' => $request->id,
            'IDPegawai' => $request->idp,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        //alihkan ke halaman absen
        return redirect('/absen');
    }

    //edit data pada tabel absen
    public function edit($id)
    {
        //ambil data absen berdasarkan id-nya
        $absen = DB::table('absen')->where('ID', $id)->get();
        //ambil data pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        //mengirim data absen dan pegawai ke view edit
        return view('absen.edit', ['absen' => $absen, 'pegawai' => $pegawai]);
    }

    //update data absen
    public function update(Request $request)
    {
        //update data absen
        DB::table('absen')->where('ID', $request->ida)->update([
            'ID' => $request->ida,
            'IDPegawai' => $request->idp,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        //alihkan ke halaman absen
        return redirect('/absen');
    }

    //hapus data absen
    public function hapus($id)
    {
        //hapus data absen berdasarkan id-nya
        DB::table('absen')->where('id', $id)->delete();
        //alihkan ke halaman absen
        return redirect('/absen');
    }

}
