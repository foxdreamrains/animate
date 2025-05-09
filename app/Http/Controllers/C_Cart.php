<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#untuk mengambil Model
use App\Http\Requests;
use App\Produk;
use DarryIdecode\Cart\Cart;
use Validator;

class C_Cart extends Controller
{
    public function index(Request $request){
        
        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('keranjang.cart', compact('cartItems'));
    }

    public function add(Produk $produk){

        \Cart::session(auth()->id())->add(array(
            'id' => $produk->id,
            'name' => $produk->judul,
            'price' => $produk->harga,
            'quantity' => 1,
            'attributes' => array(
                'img' => $produk->img,
            ),
            'associatedModel' => $produk
        ));


        return redirect()->route('homeLog');
    }

    public function destroy($itemId){

        $cartItems = \Cart::session(auth()->id())->remove($itemId);

        return back();
    }

    public function update($rowId){
        \Cart::session(auth()->id())->update($rowId, [
            'quantity' => [
                'relative' => false,
                'value' => request('quantity')
            ]
        ]);

        return back();
    }
}