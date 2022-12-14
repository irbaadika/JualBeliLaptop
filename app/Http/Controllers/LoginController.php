<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function _constuct()
    {
    }

    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    protected $redirectTo;
    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->verify == 0) {
                Auth::logout();
                return back()->with('loginError', 'Silahkan hubungi administrator untuk aktivasi akun anda agar bisa masuk');
            }

            // return redirect()->intended('/dashboard');

            if(Auth::user()->role == "admin"){
                return redirect()->intended('/dashboard');
            }elseif(Auth::user()->role == "seller"){
                return redirect()->intended('/dashboardSeller');
            }else{
                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Silahkan coba lagi');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('/');
    }

    public function verify(Request $request, User $user)
    {

        $user = User::find($request)->first();
        if ($user) {
            $user->verify = '1';
            $user->save();
        }

        return redirect('/admin/buyer');
    }

    public function block(Request $request)
    {

        $user = User::find($request)->first();
        if ($user) {
            $user->verify = '0';
            $user->save();
        }

        return redirect('/admin/buyer');
    }
}
