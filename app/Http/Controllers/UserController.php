<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Likes;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request) {
        $produk = Produk::all();
        return response()->view('userGuest.index',
        [
            'produk' => $produk
        ])->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }

    public function comment(Request $request){
        dd($request->all());
        // $validasiComment = $request->validate([
        //     'comment' => 'required',
        // ]);
        // $Komentar = new Komentar();
    }
}
