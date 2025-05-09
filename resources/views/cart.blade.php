@foreach($cartItems as $item)
            <tr>
                <td><img style="width: 200px" src="{{ asset('img/barang/default.png') }}"></td>
                <td>
                    <h7><strong>{{ $item->name }}</strong></h7>
                    <p style="color: #1d6bff"><?php $angka =\Cart::session(auth()->id())->get($item->id)->getPriceSum();  echo "Rp. ".number_format($angka, 0,".",".") ?>
                    </p>
                </td>
                <td>
                    <form action="{{ route('cart.perbarui', $item->id) }}">
                        Jumlah : <input type="number" name="quantity" value="{{ $item->quantity }}">
                        <input type="submit" value="simpan">
                    </form>
                </td>
                <td><a href="{{ route('cart.hapus', $item->id) }}" style="background: #e07c8e" class="btn waves-effect waves-light"><i class="material-icons">delete_forever</i></a>
                </td>
            </tr>
            @endforeach