<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#untuk mengambil Model
use App\Http\Requests;
use App\Produk;
use App\Kategori;

class C_Kategori extends Controller
{
    public function indexDeus(){
        $produk = Produk::where('judul','like',"%"."Deus"."%")->paginate(8);
        return view('kategori/deus',['produk' => $produk]);
    }

    public function indexDickies(){
        $produk = Produk::where('judul','like',"%"."Dickies"."%")->paginate(8);
        return view('kategori/dickies',['produk' => $produk]);
    }

    public function indexmustBeNice(){
        $produk = Produk::where('judul','like',"%"."must"."%")->paginate(8);
        return view('kategori/mustbenice',['produk' => $produk]);
    }

    public function indexJRipNdip(){
        $produk = Produk::where('judul','like',"%"."Rip"."%")->paginate(8);
        return view('kategori/jripndip',['produk' => $produk]);
    }

    public function kategori($slug_kategori){
        $kategoriall = Kategori::all();
        $kategori = Kategori::where('slug_kategori', $slug_kategori)->first();
        $produk = Produk::where('slug','like',"%".$slug_kategori."%")->paginate(8);

        return view('kategori.detailk', compact('kategori', 'kategoriall', 'produk'));
    }
}

