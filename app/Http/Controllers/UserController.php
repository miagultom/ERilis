<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
  public function index()
    {
        $dtBerita = Berita::paginate(5);
        return view('layouts.home', compact('dtBerita'));
    }

    public function detailBerita(Request $request, $id)
    {
        $detail = Berita::find($id);
        return view('user.detailUser',compact('detail'));
    }
}