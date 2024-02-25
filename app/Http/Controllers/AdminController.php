<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Likes;
use Intervention\Image\Facades\Image;
use App\Models\Komentar;
// use Intervention\Image\ImageManager;

class AdminController extends Controller{
    public function edit(){

    }
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
        return response()->view('admin.productList',
        [
            'produk' => $produk
        ])->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }
    public function upImg(Request $request){
        $request->validate([
            'image' => 'required|image',
            'nama'  => 'required',
            'desk'  => 'required',
            'link'  => 'required'
        ]);

        $nama = $request->nama;
        $desk = $request->desk;
        $link = $request->link;

        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $tipegambar = $gambar->getClientMimeType();
            $imageName = 'post-images/'.$nama.'.'.$gambar->extension();
            // $gambar = Image::make($gambar)->encode('jpg', 50);
            $gambar->move(public_path('storage/post-images'), $imageName);

            $produk = new Produk();
            $produk->nama = $nama;
            $produk->desk = $desk;
            $produk->link = $link;
            $produk->tipeimage = $tipegambar;
            $produk->image_path = $imageName;
            $produk->save();

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
