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
        //memanggil view tambah
        return view('absen.tambah');
    }

    //insert data ke tabel absen
    public function store(Request $request)
    {
        //insert data ke dalam tabel absen
        DB::table('absen')->insert([
            'id' => $request->id,
            'id_pegawai' => $request->idp,
            'tanggal' => $request->tanggal,
            'status' => $request->status
        ]);
        //alihkan ke halaman absen
        return redirect('/absen');
    }

    //edit data pada tabel absen
    public function edit($id)
    {
        //ambil data absen berdasarkan id-nya
        $absen = DB::table('absen')->where('id', $id)->get();
        //mengirim data tersebut ke view edit
        return view('absen.edit', ['absen' => $absen]);
    }

    //update data absen
    public function update(Request $request)
    {
        //update data absen
        DB::table('absen')->where('id', $request->id)->update([
            'id' => $request->id,
            'id_pegawai' => $request->idp,
            'tanggal' => $request->tanggal,
            'status' => $request->status
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
