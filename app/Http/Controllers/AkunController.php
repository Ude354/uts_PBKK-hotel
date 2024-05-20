<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun; // Pastikan Anda mengimpor model Akun yang sesuai

class AkunController extends Controller
{
    public function index()
    {
        $akun = Akun::all(); // Mengambil semua data dari model Akun

        return view('akun.index', compact('akun')); // Menampilkan data ke view
    }

    public function show($id)
    {
        $akun = Akun::findOrFail($id); // Mengambil data akun berdasarkan ID

        return view('akun.show', compact('akun')); // Menampilkan detail akun ke view
    }

    // Metode lain seperti create, store, edit, update, dan delete bisa ditambahkan di sini
}

