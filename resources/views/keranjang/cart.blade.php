@extends('layouts.app')
@section('title', 'Dice')
@section('content')
<div class="container">
    <h5>Keranjang</h5>
    <hr>
    <br/>
    <table>

        <tbody>
            @foreach($cartItems as $item)
            <tr>
                <td><img id="cartImg" src="img/barang/baju/{{ $item->attributes['img'] }}"></td>
                <td>
                    <h7><strong>{{ $item->name }}</strong></h7>
                    <p style="color: #1d6bff"><?php $angka =\Cart::session(auth()->id())->get($item->id)->getPriceSum();  echo "Rp. ".number_format($angka, 0,".",".") ?>
                </p>
            </td>
            <td>
                <form action="{{ route('cart.perbarui', $item->id) }}">
                    Jumlah : <input id="cartJumlah" type="number" name="quantity" value="{{ $item->quantity }}">
                    <input  class="btn waves-light btn-small buttonGreen" type="submit" value="simpan">
                </form>
                <a href="{{ route('cart.hapus', $item->id) }}" id="cart" class="btn waves-effect cart"><i class="material-icons">delete_forever</i></a>
            </td>
            <td>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr/>
<div class="row" style="margin-bottom: 50px;">
    <div class="col-s5"></div>
    <div class="col-s9">
        <div style="text-align: right;">
            <h5><strong>Total Harga : <?php $angka =\Cart::session(auth()->id())->getTotal();  echo "Rp. ".number_format($angka, 0,".",".") ?></strong></h5>
        </div>
        <div class="positionChckout">
                    <a onclick="hello()" class="btn right buttonBlack">Checkout</a>
                </div>
    </div>
</div>
<hr/>
</div>
@endsection
@section('js')
<script>
function hello(){
    (async () => {

const { value: accept } = await Swal.fire({
  title: 'Virtual Account',
  input: 'checkbox',
  inputValue: 1,
  confirmButtonColor: '#b50eaf',
  inputPlaceholder:
    'Bayar dengan Bank Virtual Account BANK BCA,BANK BNI, BANK MANDIRI & DLL',
  confirmButtonText:
    '<a href="https://checkout-staging.xendit.co/web/681d811029406607024a15dc" style="text-decoration: none; color: white;" target="_blank"> PAY NOW  &nbsp;<i class="fa fa-arrow-right"></i></a>',
  inputValidator: (result) => {
    return !result && 'kamu harus menyetujuinya'
  }
})

if (accept) {
  Swal.fire('Berhasil Pesanan Segera Diproses')
}

})()
}
</script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
@endsection
