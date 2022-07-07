<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Berita;


class BeritaController extends Controller
{
    public function index()
    {
        $model_Berita = Berita::paginate();

        return view('user.indexBerita')->with([
            'model_Berita' => $model_Berita,
        ]);
    }

    public function tambahData()
    {
        return view('user.tambah');
    }

    public function add(Request $request)
    {
        $model_Berita = new Berita();
        $user = Auth::user();

        $model_Berita->id = $request->id;
        $model_Berita->judul = $request->judul;
        $model_Berita->kategori = $request->kategori;
        $model_Berita->gambar = $request->gambar;
        $model_Berita->deskripsi = $request->deksripisi;
        $model_Berita->lokasi = $request->lokasi;
        $model_Berita->tanggal = $request->tanggal;
        $model_Berita->author = $request->author;

        if ($model_Berita->save()) {
            Session::flash('success', 'Data berhasil disimpan');
        } else {
            Session::flash('danger', 'Data gagal disimpan');
        }

        // Berita::created([
        //     'judul' => $request->judul,
        //     'kategori' => $request->kategori,
        //     'deskripsi' => $request->deskripsi,
        //     'lokasi' => $request->lokasi,
        //     'tanggal' => $request->tanggal,
        //     'author' => $request->author,
        // ]);
        return redirect('user/berita')->with('toast_success', 'Data Berhasil ditambahkan');;
    }

    // public function edit($id_objek)
    // {
    //     $model_ObjekWisata = ObjekWisata::where('id',id_objek)->first();
    //     return View('backend') 
    //     $model_ObjekWisata;
    // }

    public function editData($id)
    {
        $berita= Berita::findorfail($id);
        return view('user.edit', compact('berita'));
    }
    
    public function update(Request $request)
    {
        Berita::where('id', $request->id)->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'author' => $request->author,
        ]);
        return redirect('user/berita');
    }

    public function delete($id)
    {
        Berita::where('id', $id)->delete();
        return redirect('user/berita');
    }
}