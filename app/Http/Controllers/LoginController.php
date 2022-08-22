<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function daftar()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255|email|unique:users,email',
            'password' => 'required|min:5|max:255'
        ]);

        $validator['password'] = bcrypt($validator['password']);

        User::create($validator);

        Alert::success('Account Success Created')->background('#000000')->showConfirmButton('Ok', '#00FFC2')->autoClose(5000);

        return redirect('/login');

    }

    public function authenticate(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|min:5|max:255|email',
            'password' => 'required|min:5|max:255'
        ]);

        if (Auth::attempt($validator)) {
            $request->session()->regenerate();

            Alert::success('<span style="color: white;">Login Success</span>')->background('#000000')->showConfirmButton('Ok', '#00FFC2')->autoClose(5000);

            return redirect()->intended('/');
        }

        Alert::error('<span style="color: white;">Username or Password Wrong</span>')->background('#000000')->showConfirmButton('Ok', '#00FFC2')->autoClose(5000);


        return back();

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Alert::success('<span style="color: white;">Logout Success</span>')->background('#000000')->showConfirmButton('Ok', '#00FFC2')->autoClose(5000);

        return redirect('/login');
    }

}
