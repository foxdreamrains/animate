<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukKategoriId extends Model
{
    protected $table = "produk_kategori";
    public $timestamps = false;
    protected $fillable = ['produk_id', 'kategori_id'];
}
