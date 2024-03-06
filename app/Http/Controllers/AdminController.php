<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Likes;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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
    public function delete(User $User){
        User::destroy($User->id);
        return back();
    }
    public function editProduct(Request $request, Produk $produk){
        return response()->view('admin.editProduct',[
            "produk" => $produk
        ])->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }
    public function updateProduct(Request $request, Produk $produk) {
        $produkEdit = Produk::findOrFail($produk->id);
        $request->validate([
            'image' => 'image',
            'nama'  => 'required',
            'desk'  => 'required',
            'link'  => 'required'
        ]);

        $nama = $request->nama;
        $desk = $request->desk;
        $link = $request->link;
        $tipegambar = $produkEdit->tipeimage;
        $imageName = $produkEdit->image_path;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($produkEdit->image_path) {
                Storage::disk('public')->delete('post-images/' . $produkEdit->image_path);
            }

            // Cek apakah nama yang diinput sudah ada dalam database
            $cekNama = Produk::where('nama', $nama)
                ->where('id', '!=', $produk->id)
                ->count();

            // Jika nama sudah ada, tambahkan nomor unik
            if ($cekNama > 0) {
                $nama .= ' ' . ($cekNama + 1);
            }

            // Unggah gambar baru
            $manager = new ImageManager(new Driver());
            $gambar = $request->file('image');
            $tipegambar = $gambar->getClientMimeType();
            $imageName = $nama.'.'.$gambar->extension();
            $gambar = $manager->read($gambar)->resize(200, 100);
            $gambar->save(public_path('storage/post-images/' . $imageName));
        }

        $produkEdit->nama = $nama;
        $produkEdit->desk = $desk;
        $produkEdit->link = $link;
        $produkEdit->tipeimage = $tipegambar;
        $produkEdit->image_path = $imageName;
        $produkEdit->save();

        return response()->view('admin.productList',
        [
            'produk' => $produk
        ])->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }
    public function addProduct(){
        return response()->view('admin.addProduct')->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }
    public function listProduct(Request $request){
        $produk = Produk::all();
        if($searchTerm = $request->input('search')){
            $produk = Produk::where(function($query) use ($searchTerm) {
                $query->where('nama', 'like', '%'.$searchTerm.'%');
            })->paginate(10);
        }
        return response()->view('admin.productList',
        [
            'produk' => $produk
        ])->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }
    public function deleteProduct(Produk $produk){
        Produk::destroy($produk->id);
            if ($produk->image_path) {
                Storage::disk('public')->delete($produk->image_path);
            }
        return back();
    }
    public function upImg(Request $request){
        $request->validate([
            'image' => 'required|image|unique:produk,nama',
            'nama'  => 'required',
            'desk'  => 'required',
            'link'  => 'required'
        ]);

        $nama = $request->nama;
        $desk = $request->desk;
        $link = $request->link;

        $cekNama = Produk::where('nama', $nama)->count();

        if ($cekNama > 0) {
            $i = 2;
            while (Produk::where('nama', $nama . ' ' . $i)->exists()) {
                $i++;
            }
            $nama = $nama . ' ' . $i;
        }

        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $gambar = $request->file('image');
            $tipegambar = $gambar->getClientMimeType();
            $imageName =    $nama.'.'.$gambar->extension();
            $gambar = $manager->read($gambar)->resize(200, 100);
            $gambar->save(public_path('storage/post-images/'. $imageName));

            $produk = new Produk();
            $produk->nama = $nama;
            $produk->desk = $desk;
            $produk->link = $link;
            $produk->tipeimage = $tipegambar;
            $produk->image_path = $imageName;
            $produk->save();

            return back();
        }
    }
}
