<?php

use Illuminate\Support\Facades\Route;

// Halamn admin
Route::get('/admins', 'C_Admin@dashboard')->name('adminDashboard');
Route::get('/admin/login', 'C_Admin@login')->name('adminLogin');


// khusus USER EDIT
Route::get('admin/userEdit', 'C_Admin@userEdit')->name('userEdit');
Route::get('admin/userEditTambahView', 'C_Admin@userEdit_TambahView')->name('userEditTambahView');
Route::post('admin/userEditTambah', 'C_Admin@userEdit_Tambah')->name('userEditTambah');
Route::get('admin/userEditEdit/{id}', 'C_Admin@userEdit_Edit')->name('userEditEdit');
Route::post('admin/userEditUpdate', 'C_Admin@userEdit_Update')->name('userEditUpdate');
Route::get('admin/userEditHapus/{id}', 'C_Admin@userEdit_Hapus')->name('userEditHapus');

// Khusus Produk
Route::get('admin/produk', 'C_Admin@produk')->name('produk');
Route::get('admin/produkTambahView', 'C_Admin@produk_TambahView')->name('produkTambahView');
Route::post('admin/produkTambah', 'C_Admin@produk_Tambah')->name('produkTambah');
Route::get('admin/produkEdit/{id}', 'C_Admin@produk_Edit')->name('produkEdit');
Route::post('admin/produkUpdate', 'C_Admin@produk_Update')->name('produkUpdate');
Route::get('admin/produkHapus/{id}', 'C_Admin@produk_Hapus')->name('produkHapus');

// Khusus Pesan
Route::get('admin/pesan', 'C_Admin@pesan')->name('pesan');

// Halaman Home Sebelum login
Route::get('/', 'C_Home@index')->name('homeLog');
Route::get('/CMS', 'C_Home@index')->name('homeLog');

// DETAIL
Route::get('/detail/{slug}', 'C_Home@show');

// CARI dan FILTER Harga berdasarkan harga termurah, dan berdasarkan tanggal maupun huruf
Route::get('/cari', 'C_Home@cari')->name('cari');
Route::get('/cari/harga_Termurah', 'C_Home@cariHargaT')->name('cariHargaT'); // Berdasarkan harga terendah -> Tinggi
Route::get('/cari/harga_Termahal', 'C_Home@cariHargaR')->name('cariHargaR'); // Berdasarkan harga terendah -> Tinggi
Route::get('/cari/a_z', 'C_Home@cariZ_A')->name('cariA_Z'); // Berdasarkan huruf A -> Z
Route::get('/cari/z_a', 'C_Home@cariA_Z')->name('cariZ_A'); // Berdasarkan dari huruf Z -> A

// KATEGORI
Route::get('admin/kategori', 'C_Admin@kategori')->name('kategori');
Route::get('admin/kategoriTambahView', 'C_Admin@kategori_TambahView')->name('kategoriTambahView');
Route::post('admin/kategoriTambah', 'C_Admin@kategori_Tambah')->name('kategoriTambah');
Route::get('admin/kategoriEdit/{id}', 'C_Admin@kategori_Edit')->name('kategoriEdit');
Route::post('admin/kategoriUpdate', 'C_Admin@kategori_Update')->name('kategoriUpdate');
Route::get('admin/kategoriHapus/{id}', 'C_Admin@kategori_Hapus')->name('kategoriHapus');
// DETAIL KATEGORI
Route::get('/kategori/{slug_kategori}', 'C_Kategori@kategori');
// NOTE :
// !_KATEGORI MASIH HARDCODE _!
Route::get('/kategori/deus', 'C_Kategori@indexDeus')->name('kategoriDeus');
Route::get('kategori/dickies', 'C_Kategori@indexDickies')->name('kategoriDickies');
Route::get('kategori/mustbenice', 'C_Kategori@indexmustBeNice')->name('kategorimustBeNice');
Route::get('kategori/jripndip', 'C_Kategori@indexJRipNdip')->name('kategoriJRipNdip');
Route::get('test/chat', 'C_Chat@chat')->name('chat');



// LOKASI PENYIMPANAN SETELAH LOGIN
Auth::routes();

// Menambahkan Produk
Route::get('/carts/{produk}', 'C_Cart@add')->name('cart.tambah')->middleware('auth');
Route::get('/carts/hapus/{itemId}', 'C_Cart@destroy')->name('cart.hapus')->middleware('auth');
Route::get('/carts/perbarui/{itemId}', 'C_Cart@update')->name('cart.perbarui')->middleware('auth');
Route::get('/cart', 'C_Cart@index')->name('cart');

// Halaman Home Setelah login
Route::get('/home', 'HomeController@index')->name('home');
