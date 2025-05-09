@extends('layouts.app')
@section('title', 'Aku Sale')
@section('content')
<nav id="navc" style="background-color: #ee6ec1;">
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="{{ route('kategoriDeus') }}">Baju Deus</a></li>
        <li class="tab"><a href="{{ route('kategoriDickies') }}">Baju Dickies</a></li>
        <li class="tab"><a href="{{ route('kategorimustBeNice') }}">Must Be Nice</a></li>
        <li class="tab"><a href="{{ route('kategoriJRipNdip') }}">JRipNdip</a></li>
    </ul>
</nav>

<!-- Ini halaman Berderet -->
<div class="container" id="container">
    <div class="row">
        @foreach($produk as $produkS)
        <div class="card col m3">  
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="{{ asset('img/barang/baju/'.$produkS->img) }}">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
              <h6>{{ $produkS->judul }}</h6>
              <p style="color: #1d6bff"><?php $angka =$produkS->harga;  echo "Rp. ".number_format($angka, 0,".",".") ?></p>
              <p><strong>M - S  - XL - XXL <a href="{{ route('cart.tambah',$produkS->id) }}"><i><img style="width: 40px; position: relative; left: 10%;" src="{{ asset('img/icon/cart.png') }}"/></i></a></strong></p>
              <!-- <a href="{ route('card.add', $produkS->harga) }" class="card-link">Add Card</a>-->
          </div>
          <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">{{ $produkS->judul }}<i class="material-icons right">close</i></span>
              <p>{{ $produkS->deskripsi }}</p>
              <br/><br/><br/>
              <p>
                <a href="{{ asset('detail/'. $produkS->slug) }}">Selengkapnya</a></p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection