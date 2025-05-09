@extends('layouts.app')
@section('title', 'Dice')
@section('content')
<nav id="navc" style="background-color: white;">
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        @foreach($kategoriall as $katAll)
        <li class="tab"><a style="color: black" href="{{ asset('kategori/'. $katAll->slug_kategori) }}">{{ $katAll->nama_kategori }}</a></li>
        @endforeach
    </ul>
</nav>

<!-- Ini halaman Berderet -->
<div class="container" id="container">
    <div class="row">
      @foreach($produk as $produkS)
        <div class="card col m3 s6 l3">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="{{ asset('img/barang/baju/'. $produkS->img) }}">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
              <h6>{{ $produkS->judul }}</h6>
              <p style="color: #1d6bff"><?php $angka =145000;  echo "Rp. ".number_format($angka, 0,".",".") ?></p>
              <p><strong>M - S  - XL - XXL <a href="{{ route('cart.tambah',$produkS->id) }}"><i><img style="width: 40px; position: relative; left: 10%;" src="{{ asset('img/icon/cart.png') }}"/></i></a></strong></p>
              <!-- <a href="{ route('card.add', $produkS->harga) }" class="card-link">Add Card</a>-->
          </div>
          <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Baju Deus Jumple White<i class="material-icons right">close</i></span>
              <p>{{ $produkS->deskripsi }}</p>
              <br/><br/><br/>
              <p>
                <a href="{{ asset('detail'. $produkS->slug) }}">Selengkapnya</a></p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
