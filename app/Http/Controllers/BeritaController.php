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
        $dtBerita = Berita::paginate(5);
        return view('user.indexBerita', compact('dtBerita'));
    }

    public function create()
    {
        return view('user.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required|min:10',
            'kategori' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required|min:20',
            'lokasi' => 'required',
            'author' => 'required',
            
        ]);

        $data = Berita::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'author' => $request->author,
        ]);

        if ($request->hasFile('gambar')){
            $request->file('gambar')->move('Berita/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }

        return redirect('/user/berita')->with('toast_success', 'Data berhasil disimpan!');
    }
   
    public function edit($id)
    {
        $berita = Berita::findorfail($id);
       return view('user.edit', compact('berita'));
    }

        public function update(Request $request, $id)
        {
            $this->validate($request,[
                'judul' => 'required|min:10',
                'kategori' => 'required',
                'gambar' => 'required',
                'deskripsi' => 'required|min:20',
                'lokasi' => 'required',
                'author' => 'required',
                
            ]);

            $berita = Berita::findorfail($id);
            $berita->update($request->all());
            return redirect('/user/berita')->with('toast_success', 'Data berhasil diubah!');
        }

    public function delete($id)
    {
        Berita::where('id', $id)->delete();
        return redirect('user/berita');
    }
}