@extends('layouts.app')
@section('title', 'Dice')
<!-- <p>{{ $produks->judul }}</p> -->
@section('content')
<!-- Gambar dan keterangan di sebelah kanan -->
<div class="container">
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img style="max-height: 500px;" src="{{ asset('img/barang/baju/'.$produks->img) }}">
                </div>
                <div class="card-action">
                  <h3>
                    {{ $produks->judul }}
                </h3>
                <p>
                    {{ $produks->deskripsi }}
                </p>
                <p style="color: blue"><?php $angka =$produks->harga;  echo "Rp. ".number_format($angka, 0,".",".") ?></p>
                <br>

                {{-- <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i> --}}
  </button>
            </div>
        </div>
    </div>


    <!-- Kontak -->
    <div class="row">
        <div class="col s12 m6">
          <div class="card">
             <div class="card" id="card12">
                <h4 id="kontak">Available at</h4>
                <p id="noTlp"><i class="fas fa-phone-square"></i>
                No tlp = 0831-4832-1268</p>
                <p id="noTlp2"><i class="fab fa-whatsapp"></i>
                Whatsapp = 0831-4832-1268</p>
                <a href="https://shopee.co.id/animateofficial.id"><img id="iconShope" src="{{ asset('img/icon/shope.png') }}"></a>
                <a href="https://www.tokopedia.com/animateofficial"><img id="iconTokped" src="{{ asset('img/icon/tokopedia.png') }}"></a>

            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
