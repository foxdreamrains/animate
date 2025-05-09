@extends('layouts.app')
@section('title', 'Dice')
@section('content')

<div class="slider">
    <ul class="slides">
      <li>
        <img src="{{ asset('img/slide/slide1.jpg') }}"> <!-- random image -->
        <div class="caption center-align">
          <h3 style="color: black;">Buy 1 Get 1</h3>
          <h5 class="light grey-text text-lighten-3">Dapatkan sekarang belanja di Dice Sale semakin mudah</h5>
      </div>
  </li>
  <li>
    <img src="{{ asset('img/slide/slide2.jpg') }}"> <!-- random image -->
    <div class="caption left-align">
      <h3 style="color: purple">Buy 1 Get 1</h3>
      <h5 class="light yellow-text text-lighten-3"></h5>
  </div>
</li>
</ul>
</div>

<section id="services" class="services grey lighten-3" id="servicesMargin" style="padding: 30px;">
    <div class="container">
        <div class="row">
            <h3 class="light center grey-text text-darken-3">Kategori</h3>
            @foreach($produkKategori as $katProduk)
            <div class="col m3 s12">
                <div class="card-panel center" id="{{ $katProduk->card_kategori }}">
                    <h5><a href="{{ asset('kategori/'. $katProduk->slug_kategori) }}" id="panel">{{ ucwords($katProduk->nama_kategori) }}</h5>
                        <p>{{ $katProduk->ket_kategori }}</p></a>
                    </div>
                </div>
                @endforeach
                        </div>
                    </div>
                </section>
                <div class="carousel">
                    @foreach($produk as $produkS)
                    <a class="carousel-item" href="{{ asset('detail/'. $produkS->slug) }}">
                        <p id="HomeHargaCarousel">{{ $produkS->judul }}<br/><?php $angka =$produkS->harga;  echo "Rp. ".number_format($angka, 0,".",".") ?></p>
                        <img id="HomeImgCarousel" src="{{ asset('img/barang/baju/'.$produkS->img) }}">
                        <i id="HomeIconCarousel"><img id="HomeIconImgCarousel" src="{{ asset('img/icon/cart.png') }}"/></i>
                    </a>
                    <i id="iconCart"><img id="iconImg" src="{{ asset('img/icon/cart.png') }}"/></i>
                    @endforeach
                </div>
                <!-- Ini halaman Berderet -->
                <div class="container" id="container">
                    <div class="row">
                        @foreach($produk as $produkS)
                      <div class="card col m3 s6 l3">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{ asset('img/barang/baju/'.$produkS->img) }}">
                        </div>
                        <div class="card-content" style="padding: inherit;">
                          <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                          <h6 style="position: relative; top: 9px">{{ $produkS->judul }}</h6>
                          <p id="hargaBiru"><?php $angka =$produkS->harga;  echo "Rp. ".number_format($angka, 0,".",".") ?></p>
                          <p><strong><a href="{{ route('cart.tambah',$produkS->id) }}"><i><img id="imgBiru" src="{{ asset('img/icon/cart.png') }}"/></i></a></strong></p>
                          <?php
                              $hari = array ( 1 =>
                                'Senin',
                                'Selasa',
                                'Rabu',
                                'Kamis',
                                'Jumat',
                                'Sabtu',
                                'Minggu'
                            );

                              $num = date('N', strtotime($produkS->created_at->format('Y-m-d')));
                              ?>
                              <i style="position: relative; bottom: 60px; left: -3px ">
                              <img width="21" src="{{ asset('img/icon/star2.png') }}">
                              <img width="21" src="{{ asset('img/icon/star2.png') }}">
                              <img width="21" src="{{ asset('img/icon/star.png') }}">
                              <img width="21" src="{{ asset('img/icon/star.png') }}">
                              <img width="21" src="{{ asset('img/icon/starhover1.png') }}">
                          </i>
                              <p id="tanggalGrey"><?php echo $hari[$num];?>, {{$produkS->created_at->format('d m Y')}}<p>
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
            <div class="container">
               <ul class="pagination">
                 {{ $produk->links('pagination.default') }}
             </ul>
         </div>
@endsection
