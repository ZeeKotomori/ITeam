<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Likes;
use App\Models\Image;
use App\Models\Komentar;

class AdminController extends Controller{
    public function dashboard(Request $request){
    $countLikes = Likes::count();
    $produk = Produk::count();
    $userlist = User::where('role', 'user')->count();

    $user = User::where('role', 'user')->get();
    if ($searchTerm = $request->input('search')) {
        $user = User::where(function($query) use ($searchTerm) {
                        $query->where('nama', 'like', '%'.$searchTerm.'%')
                            ->orWhere('email', 'like', '%'.$searchTerm.'%')
                            ->orWhere('no_telp', 'like', '%'.$searchTerm.'%');
                    })
                    ->whereNotIn('role', ['admin'])
                    ->paginate(5);
    }

    return response()->view('admin.dashboard',
    [
        'user' => $user,
        'likes' => $countLikes,
        'produk' => $produk,
        'userlist' => $userlist
    ])->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
}
    public function addProduct(){
        return response()->view('admin.addProduct')->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }
    public function listProduct(){
        $produk = Produk::all();
        $imageProduk = Image::all();
        return response()->view('admin.productList',
        [
            'produk' => $produk,
            'image' => $imageProduk
        ])->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }
    public function upImg(Request $request){
        $request->validate([
            'image' => 'required|image',
            'nama'  => 'required',
            'desk'  => 'required',
            'link'  => 'required'
        ]);
        $slash = 'post-image';
        $nama = $request->nama;
        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $tipegambar = $gambar->getClientMimeType();
            $imageName = $slash.'/'.$nama.'.'.$gambar->extension();
            $gambar->move(public_path('storage/post-images'), $imageName);

            $image = new Image();
            $image->tipeimage = $tipegambar;
            $image->image_path = $imageName;
            $image->save();

            return back();
        } else {
            return 0;
        }
    }
    public function delete(User $User){
        User::destroy($User->id);
        return back();
    }
}
