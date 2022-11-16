<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email'    => 'required|unique:users|email',
                'password' => 'required|min:5|max:55'
            ]);

            User::create([
                'email'    => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);

            flash()->addSuccess('Başarıyla Kayıt Oldunuz. Giriş Yapabilirsiniz.', 'Başarılı');
            return redirect()->route('login');
        }
        return false;
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $login = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], (bool)$request->input('remember'));

            if ($login) {
                flash()->addSuccess('Başarıyla giriş yapıldı.', 'Hoşgeldiniz ' . Auth::user()->email);
                return redirect()->route('home');
            } else {
                flash()->addError('Giriş yapılırken hata oluştu.', 'Hata');
                return redirect()->route('login')->withErrors('E-Posta veya şifrenizi yanlış girdiniz. Lütfen tekrar deneyin.')->withInput();
            }
        }
        return false;
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('home');
    }
}
