<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function dashboard()
    {
        // Periksa apakah pengguna sudah terotentikasi
        if (Auth::check()) {
            // Pengguna sudah terotentikasi, lanjutkan dengan tampilan dashboard
            return view('dashboard');
        } else {
            // Pengguna belum terotentikasi, arahkan ke halaman login
            return redirect('/login');
        }
    }
}
