<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Produk;
use App\Models\Likes;
use App\Models\Komentar;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){

    }
    public function login(){
        return view('logIn');
    }
    public function userData(Request $request){
        $credentials = $request->validate([
            'email' => 'required|string|max:255|min:11',
            'password' => 'required|string|min:8',
        ]);

        // $hashedPassword = Hash::make($credentials['password']);

        // $credentials['password'] = $hashedPassword;
        $emailUser = $credentials['email'];
        $userData = User::where('email', $emailUser)->first();

        if ($userData && Hash::check($credentials['password'], $userData->password)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function signUp(){
        return view('signUp');
    }
    public function createData(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|max:255|min:11|unique:user,email',
            'password' => 'required|string|min:8',
            'nama' => 'required|string|min:3',
            'jenis_kelamin' => 'required|string',
            'no_telp' => 'required|string|max:255|min:12',
        ],[
            "email.required" => "Email must be filled in",
            "password.required" => "Password must be filled in",
            "nama.required" => "Name must be filled in",
            "jenis_kelamin.required" => "Gender must be filled in",
            "no_telp.required" => "Phone must be filled in",
        ]);

        $hashedPassword = bcrypt($validatedData['password']);

        $validatedData['password'] = $hashedPassword;

        User::create($validatedData);

        return redirect('/logIn')->with('success', 'Account created successfully. Please log in.');
    }
}
