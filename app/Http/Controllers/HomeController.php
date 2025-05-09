<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#untuk mengambil Model
use App\Http\Requests;
use App\Produk;
use App\Kategori;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Menggabungka, antara tambe Produk dan kategori menggunakan relasi inner Join
        $sql = 'SELECT * FROM produk AS u INNER JOIN produk_kategori AS i ON u.id = i.produk_id INNER JOIN kategori AS a ON i.kategori_id = a.id_kategori';
        // $produk = Produk::orderBy('created_at', 'DESC')->paginate(8);
        $produk = Produk::join(
            'produk_kategori', 'id', '=','produk_kategori.produk_id')
        ->join('kategori', 'kategori_id', '=', 'kategori.id_kategori')
        ->orderBy('created_at', 'DESC')
        ->paginate(8);

        $produkKategori = Kategori::orderBy('id_kategori', 'DESC')->paginate(4);

        return view('home',compact('produk', 'produkKategori'));
    }
}
