<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        return view('logIn');
    }

    public function userData(Request $request){
        $request->validate([
            'email' => 'required|string|max:255|min:11',
            'password' => 'required|string|min:8',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            $role = Auth::user()->role;
            if($role=='admin'){
                return redirect()->route('admin.dashboard');
            }else if($role=='user'){
                return redirect()->route('user.index');
            }else{
                return redirect()->route('user.index');
            }
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        };
    }

    public function signUp(){
        return view('signUp');
    }
    public function createData(Request $request){
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
        return redirect('/logIn');
    }
    public function logOut(Request $request){
        Auth::logout();
        return redirect()->route('logIn');
    }
}
