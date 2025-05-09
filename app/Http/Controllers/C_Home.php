<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#untuk mengambil Model
use App\Http\Requests;
use App\Produk;
use App\Kategori;

class C_Home extends Controller
{
    public function index(){
        // Menggabungka, antara tambe Produk dan kategori menggunakan relasi inner Join
        $sql = 'SELECT * FROM produk AS u INNER JOIN produk_kategori AS i ON u.id = i.produk_id INNER JOIN kategori AS a ON i.kategori_id = a.id_kategori';
        // $produk = Produk::orderBy('created_at', 'DESC')->paginate(8);
        $produk = Produk::join(
            'produk_kategori', 'id', '=','produk_kategori.produk_id')
        ->join('kategori', 'kategori_id', '=', 'kategori.id_kategori')
        ->orderBy('created_at', 'DESC')
        ->paginate(8);

        $produkKategori = Kategori::orderBy('id_kategori', 'DESC')->paginate(4);

        return view('welcome',compact('produk', 'produkKategori'));
    }

    public function show($slug){
        $produks = Produk::where('slug', $slug)->first();
        return view('details.detail', compact('produks'));
    }

    public function cari(Request $request){
        $cari = $request->cari;

    // mengambil data dari table pegawai sesuai pencarian data

        $produk = Produk::where('judul','like',"%".$cari."%")->paginate(8);

        $produkKategori = Kategori::orderBy('id_kategori', 'DESC')->paginate(4);
        // mengirim data pegawai ke view index
        return view('welcome', compact('produk', 'produkKategori'));
    }

    public function cariHargaT(){
        $produk = Produk::join(
            'produk_kategori', 'id', '=','produk_kategori.produk_id')
        ->join('kategori', 'kategori_id', '=', 'kategori.id_kategori')->orderBy('harga', 'ASC')->paginate(8);

        $produkKategori = Kategori::orderBy('id_kategori', 'DESC')->paginate(4);

        return view('welcome', compact('produk', 'produkKategori'));
    }

    public function cariHargaR(){
        $produk = Produk::join(
            'produk_kategori', 'id', '=','produk_kategori.produk_id')
        ->join('kategori', 'kategori_id', '=', 'kategori.id_kategori')->orderBy('harga', 'DESC')->paginate(8);

        $produkKategori = Kategori::orderBy('id_kategori', 'DESC')->paginate(4);

        return view('welcome', compact('produk', 'produkKategori'));
    }

    public function cariA_Z(){
        $produk = Produk::join(
            'produk_kategori', 'id', '=','produk_kategori.produk_id')
        ->join('kategori', 'kategori_id', '=', 'kategori.id_kategori')->orderBy('judul', 'DESC')->paginate(8);

        $produkKategori = Kategori::orderBy('id_kategori', 'DESC')->paginate(4);

        return view('welcome', compact('produk', 'produkKategori'));
    }

    public function cariZ_A(){
        $produk = Produk::join(
            'produk_kategori', 'id', '=','produk_kategori.produk_id')
        ->join('kategori', 'kategori_id', '=', 'kategori.id_kategori')->orderBy('judul', 'ASC')->paginate(8);

        $produkKategori = Kategori::orderBy('id_kategori', 'DESC')->paginate(4);

        return view('welcome', compact('produk', 'produkKategori'));
    }
}

