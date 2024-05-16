<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserOTP;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;

class AuthController extends Controller
{
    public function guest(Request $Request){
        dd($Request);
        $produk = Produk::all();
        if($Request->session('guest')){
            return response()->view('guest.index',
            [
                'produk' => $produk
            ]);
        }else{
            return response()->view('logIn');
        }
    }

    public function tryGuest(){
        Auth::user('guest');
        return redirect()->route('guest');
    }

    public function login(){
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
                $role = $user->role;
                    if($role=='admin'){
                        $request->session()->regenerate();
                        return redirect()->intended('/');
                    }else if($role=='user'){
                        $request->session()->regenerate();
                        return redirect()->intended('/');
                    }else{
                        return redirect()->intended()->route('/');
                    }
            }else{
                return back()->withErrors([
                    'email' => 'Your email has been registered, not yet verified'
                ])->onlyInput('email');
            }
        }else{
            return back()->withErrors([
                'email' => 'Your email is not registered yet'
            ])->onlyInput('email');
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
        $user = User::create([
            'id' => Str::uuid(),
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'] = $hashedPassword,
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'no_telp' => $validatedData['no_telp']
        ]);
        $user_id = $user->id;
        $userOtp = UserOTP::create([
            'user_id' => $user_id,
            'otp_code' => rand(100000,999999),
            'expired_at' => Carbon::now()->addMinutes(5)
        ]);
        $Otp = $userOtp->otp_code;
        $email = $user->email;
        $subject = "OTP Verification, From Iteam";
        $massage = `Hello $user->email, Welcome to our website`;
        Mail::to($email)->send(new OtpMail($Otp, $subject, $massage));
        return redirect()->route('otp-verification', ['user_id' => $user_id]);
    }

    public function logOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.index');
    }
}
