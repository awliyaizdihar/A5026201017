<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MouseController extends Controller
{

    //menampilkan data mouse
    public function index()
    {
        //mengambil data dari tabel mouse
        $mouse = DB::table('mouse')->paginate(5);
        //mengirim data mouse ke view index
        return view('mouse.index', ['mouse' => $mouse]);
    }

    //method untuk melakukan search
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari tabel mouse sesuai pencarian data
        $mouse = DB::table('mouse')
            ->where('mouse.merkmouse', 'like', "%" . $cari . "%")
            ->paginate(5);

        // mengirim data mouse ke view index
        return view('mouse.index', ['mouse' => $mouse]);
    }


    //menampilkan view form tambah mouse
    public function tambah()
    {
        //memanggil view tambah
        return view('mouse.tambah');
    }

    //insert data ke tabel mouse
    public function store(Request $request)
    {
        //insert data ke dalam tabel mouse
        DB::table('mouse')->insert([
            // 'kodemouse' => $request->kodem,
            'merkmouse' => $request->merkm,
            'stockmouse' => $request->stockm,
            'tersedia' => $request->tersedia
        ]);
        //alihkan ke halaman mouse
        return redirect('/mouse');
    }

    //edit data pada tabel mouse
    public function edit($id)
    {
        //ambil data mouse berdasarkan kodenya
        $mouse = DB::table('mouse')->where('kodemouse', $id)->get();
        //mengirim data mouse view edit
        return view('mouse.edit', ['mouse' => $mouse]);
    }

    //update data mouse
    public function update(Request $request)
    {
        //update data mouse
        DB::table('mouse')->where('kodemouse', $request->kodem)->update([
            'kodemouse' => $request->kodem,
            'merkmouse' => $request->merkm,
            'stockmouse' => $request->stockm,
            'tersedia' => $request->tersedia
        ]);
        //alihkan ke halaman mouse
        return redirect('/mouse');
    }

    //melihat detail mouse
    public function detail($id)
    {
        // ambil data mouse berdasarkan kodenya
        $mouse = DB::table('mouse')->where('kodemouse', $id)->get();
        //mengirim data mouse view detail
        return view('mouse.detail', ['mouse' => $mouse]);
    }

    //hapus data mouse
    public function hapus($id)
    {
        //hapus data mouse berdasarkan kodenya
        DB::table('mouse')->where('kodemouse', $id)->delete();
        //alihkan ke halaman mouse
        return redirect('/mouse');
    }
}
