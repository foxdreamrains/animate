<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // public $timestamps = false;

    protected $table = "produk";
    public $timestamps = true;
    protected $fillable = ['judul', 'img', 'slug', 'harga', 'deskripsi'];
}
