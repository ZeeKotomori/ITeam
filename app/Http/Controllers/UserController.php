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
        return response()->view('userGuest.index')->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }
    public function dashboard(Request $request){
        $user = User::where('role', 'user')->get();
        return response()->view('admin.dashboard', ['user' => $user])->header('Cache-Control', 'no-cache, no-store, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', '0');
    }
    public function delete(User $User){
        User::destroy($User->id);
        return back();
    }
}
