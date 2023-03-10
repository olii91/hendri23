<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class MasyarakatLoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function guard()
    {
        return Auth::guard('masyarakat');
    }

    public function showLoginForm()
    {
        return view('masyarakat.auth.login');
    }

    public function username()
    {
        return 'username';
    
    }
    public function redirectTo()
    {
        return '/masyarakat/pengaduan/create';
    }
}
