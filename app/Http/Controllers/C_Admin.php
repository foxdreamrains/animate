<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

#untuk mengambil Model
use App\Http\Requests;
use App\User;
use App\Produk;
use App\Kategori;
use App\ProdukKategoriId;

class C_Admin extends Controller
{
    public function dashboard(){
        $produkJumlah = Produk::all();
        return view('admin/dashboard', ['produkJumlah' => $produkJumlah]);
    }

    public function login(){

    }

    // HA<AMAN USER EDIT URUTAN SAMA DENGAN DI ROUTE web.php
    public function userEdit(){
        $user = User::all();

        return view('admin/useredit/useredit', compact('user'));
    }
    // HALAMAN KHUSUS USER EDIT MASTER ADMIN userEdit()
    public function userEdit_TambahView(){
        return view('admin/useredit/useredittambah');
    }
    public function userEdit_Tambah(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'password' => Hash::make($request->password),
        ]);

        return redirect('admin/userEdit');
    }
    public function userEdit_Edit($id){
        $user = User::where('id', $id)->get();

        return view('admin/useredit/usereditupdate', compact('user'));
    }
    public function userEdit_Update(Request $request){
        User::where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'password' => Hash::make($request->password),
        ]);

        return redirect('admin/userEdit');
    }
    public function userEdit_Hapus($id){
        User::where('id', $id)->delete();

        return redirect('admin/userEdit');
    }
    // !!! WARNING KHSUSU userEdit !!!

    public function userProfile(){

    }


    // KHUSUS UNTUK PRODUK master
    public function produk(){
        $produk = Produk::join(
            'produk_kategori', 'id', '=','produk_kategori.produk_id')
        ->join('kategori', 'kategori_id', '=', 'kategori.id_kategori')
        ->orderBy('created_at', 'DESC')
        ->paginate(10);
        return view('admin/produk/produk', compact('produk'));
    }
    public function produk_TambahView(){
        $produk = Produk::orderBy('id', 'DESC')->first();
        $kategori = Kategori::all(['id_kategori', 'nama_kategori']);

        return view('admin/produk/produktambah', compact('produk', 'kategori'));
    }
    public function produk_Tambah(Request $request){


        $this->validate($request, [
            'judul' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg|max:8048',
        ]);

        if($request->file('gambar') == null){
            $gambar = null;
            }
        else{
            $file_image = $request->file('gambar');
            $gambar = time()."_".$file_image->getClientOriginalName();
            $tujuan_upload = 'img/barang/baju';
            $file_image->move($tujuan_upload,$gambar);
        }


        ProdukKategoriId::create([
            'produk_id' => $request->produk_id,
            'kategori_id' => $request->kategori_id,
        ]);

        Produk::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'img' => $gambar,
        ]);

        return redirect('admin/produk');

    }
    public function produk_Edit($id){
        $produk = Produk::where('id', $id)->get();

        return view('admin/produk/produkeditupdate', ['produk' => $produk]);
    }
    public function produk_Update(Request $request){
        // menyimpan data file yang diupload ke variabel $file
        if($nama_file = " "){
            $nama_file = $request->imgs;
        }
        else if($nama_file = true){
            $file = $request->file('img');

            $nama_file = time()."_".$file->getClientOriginalName();

           // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'img/barang/baju';
            $file->move($tujuan_upload,$nama_file);
        }

        //update data Produk
        Produk::where('id',$request->id)->update([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'img' => $nama_file,
        ]);

        return redirect('admin/produk');
    }
    public function produk_Hapus($id){
        Produk::where('id', $id)->delete();

        return redirect('admin/produk');
    }
    // !!! WARNING KHSUSU Produk !!!

    //KHUSUS  UMTUK PESAN
    public function pesan(){
        return view('admin.pesan.pesan');
    }
    // !!! WARNING KHSUSU PESAN !!!

    //KHUSUS  UMTUK KATEGORI
    public function kategori(){
        $kategori = Kategori::all();

        return view('admin.kategori.kategori', compact('kategori'));
    }

    public function kategori_TambahView(){
        return view('admin.kategori.kategoritambah');
    }

    public function kategori_Tambah(Request $request){
        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug_kategori' => Str::slug($request->nama_kategori),
            'card_kategori' => $request->card_kategori,
            'ket_kategori' => $request->ket_kategori,
        ]);

        return redirect('admin/kategori');
    }

    public function kategori_Edit($id){
        $kategori = Kategori::where('id_kategori', $id)->get();

        return view('admin.kategori.kategorieditupdate', compact('kategori'));
    }

    public function kategori_Update(Request $request){
        Kategori::where('id_kategori',$request->id)->update([
            'slug_kategori' => $request->slug_kategori,
            'nama_kategori' => $request->nama_kategori,
            'ket_kategori' => $request->ket_kategori,
            'card_kategori' => $request->card_kategori,
        ]);

        return redirect('admin/kategori');
    }

    public function kategori_Hapus($id){
        Kategori::where('id_kategori', $id)->delete();


        return redirect('admin/kategori');
    }

    // !!! WARNING KHSUSU KATEGORI !!!
}
