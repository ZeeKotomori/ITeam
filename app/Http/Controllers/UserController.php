<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Likes;
use App\Models\Komentar;

class UserController extends Controller
{
    public function index(Request $request){

    }
    public function logIn(Request $request)
    {

    }

    public function signUp(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|max:255|min:11',
            'nama' => 'required|string|max:255',
            'password' => 'required|string|max:255|min:8',
        ]);

        User::create($validatedData);

        return redirect('/')->with('success', 'Data berhasil disimpan.');
    }
}
