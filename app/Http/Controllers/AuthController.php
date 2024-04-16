<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserOTP;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request){
        return view('logIn');
    }

    public function userData(Request $request){
        $request->validate([
            'email' => 'required|string|max:255|min:11|email',
            'password' => 'required|string|min:8',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $user = User::where('email', $data['email'])->first();
        if(Auth::attempt($data)){
            if($user && $user->email_verified_at){
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
            }
        } else{
            return back();
        };
    }

    public function signUp(){
        return view('signUp');
    }
    public function createData(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|string|max:255|min:11|email|unique:users,email',
            'password' => 'required|string|min:8|regex:/^[a-zA-Z0-9]+$/',
            'nama' => 'required|string|min:3',
            'jenis_kelamin' => 'required|string',
            'no_telp' => 'required|string|max:14|min:12',
        ], [
            "email.required" => "Email must be filled in",
            "password.required" => "Password must be filled in",
            "nama.required" => "Name must be filled in",
            "jenis_kelamin.required" => "Gender must be filled in",
            "no_telp.required" => "Phone must be filled in",
        ]);

        $hashedPassword = bcrypt($validatedData['password']);
        // $uuid = Str::uuid();
        $user = User::create([
            'id' => Str::uuid(),
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'] = $hashedPassword,
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'no_telp' => $validatedData['no_telp']
        ]);
        $user_id = $user->id;
        UserOTP::create([
            'user_id' => $user_id,
            'otp_code' => rand(100000,999999),
            'expired_at' => Carbon::now()->addMinutes(5)
        ]);
        event(new Registered($user));
        return redirect()->route('otp-verification', ['user_id' => $user_id]);
    }
        public function logOut(Request $request){
        Auth::logout();
        return redirect()->route('logIn');
    }
}
