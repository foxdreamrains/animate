<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    public $timestamps = false;
    protected $fillable = ['slug_kategori','nama_kategori', 'ket_kategori', 'card_kategori'];
}
