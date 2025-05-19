<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'alamat' => 'required|string',
            'role' => 'required|in:Super Admin,Kasir',
        ]);

        // Simpan data ke database jika perlu (opsional)
        // Admin::create($validated);

        return back()->with('success', 'Data admin berhasil dikirim!');
    }
}