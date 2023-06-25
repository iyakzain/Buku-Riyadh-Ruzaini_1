<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunKontroler extends Controller
{
    public static function home()
    {
       return view('home');
    }
    
    public static function buku()
    {
       return view('buku');
    }
    
    public static function sirkulasi()
    {
       return view('sirkulasi');
    }
    
    public static function peminjam()
    {
       return view('daftarPeminjam');
    }
}