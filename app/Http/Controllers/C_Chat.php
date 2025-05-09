<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#untuk mengambil Model
use App\Http\Requests;
use joeattardi\emojibutton;

class C_Chat extends Controller
{
    public function chat(){
        return view('test/chat');
    }
}