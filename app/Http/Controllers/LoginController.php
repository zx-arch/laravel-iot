<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('dashboard-login.admin', [
            "title" => "Login Admin",
            "active" => "login"
        ]);
    }
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {  
            $dtuser = User::select(['username','password'])->get();
            $check = false;
            foreach ($dtuser as $dt => $value) {
                if ($credentials['username'] == $value['username'] and md5($credentials['password'])==$value['password']) {
                    $request->session()->regenerate();
                    $check = true;
                    if ($credentials['username']=='admin') {
                        return redirect()->intended('/');
                    }
                    return redirect()->intended('/');
                }
                if ($check==true) {
                    break;
                }
            }

            if ($check==false) {
                return back()->with('loginError', $credentials['username']);
            }
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
