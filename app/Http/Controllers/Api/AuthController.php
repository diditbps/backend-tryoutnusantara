<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserOligarkie; // Pastikan nama model benar
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // 1. Validasi Input sesuai struktur tabel Anda
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user_oligarkies',
            'no_hp' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // 2. Simpan ke Database
        $user = UserOligarkie::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
            'role' => 'user', // Nilai default
            'is_premium' => 'no', // Nilai default
            'poin' => 0,
        ]);

        // 3. Response Berhasil
        return response()->json([
            'message' => 'Registrasi berhasil',
            'user' => $user
        ], 201);
    }
}