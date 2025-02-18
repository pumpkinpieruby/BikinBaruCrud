<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Staff;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
{
    // Validasi input
    $credentials = $request->validate([
        'nama_staff' => 'required|string',
        'password' => 'required',
    ]);

    // Cek apakah kredensial valid menggunakan guard 'staff'
    if (Auth::guard('staff')->attempt([
        'nama_staff' => $request->nama_staff,  // Nama staff untuk login
        'password' => $request->password,  // Password dari request
    ])) {
        $request->session()->regenerate();  // Mengganti session untuk mencegah session fixation
        return redirect()->intended('/home');  // Redirect ke halaman home
    }

    // Jika gagal login
    return back()->withErrors([
        'nama_staff' => 'Nama Staff atau password salah.',
    ]);
}



    public function logout(Request $request)
    {
        Auth::guard('staff')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
