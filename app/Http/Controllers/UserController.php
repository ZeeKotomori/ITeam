<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Likes;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function guest(){
        $produk = Produk::all();
        return response()->view('guest.index',
        [
            'produk' => $produk
        ]);
    }

    public function index(){
        $produk = Produk::all();
        return response()->view('userGuest.index',
        [
            'produk' => $produk
        ])->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }

    public function comment(Request $request, Produk $produk){
        $request->validate([
            'komentar' => 'required',
        ]);

        $komentarUser = $request->komentar;
        $user_id = auth()->user()->id;

        $Komentar = new Komentar();
        $Komentar->produk_id = $produk->id;
        $Komentar->user_id = $user_id;
        $Komentar->komentar = $komentarUser;
        $Komentar->save();

        return redirect()->back();
    }

    public function like(Produk $produk){
    $user_id = auth()->user()->id;

    $existingLike = Likes::where('user_id', $user_id)
                            ->where('produk_id', $produk->id)
                            ->first();
    if($existingLike){
        $existingLike->delete();
    } else {
        $like = new Likes();
        $like->produk_id = $produk->id;
        $like->user_id = $user_id;
        $like->save();
    }

    // Mengambil jumlah like terkini
    $likesCount = Likes::where('produk_id', $produk->id)->count();

    // Mengembalikan respons dalam format JSON
    return response()->json(['likesCount' => $likesCount, 'productId' => $produk->id]);
    }

    public function link($id){
        $produk = Produk::findOrfail($id);
        return redirect()->awas($produk->url);
    }
}
