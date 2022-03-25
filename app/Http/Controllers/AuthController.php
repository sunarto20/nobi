<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        try {
            $user  = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'token' => Str::random(64)
            ]);
            return response()->json(['user_id' => $user->id, 'status' => true, 'message' => 'user berhasil di buat'], 201);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'user gagal dibuat'], 400);
        }
    }

    public function login(LoginRequest $request)
    {
        try {
            Auth::attempt($request->only('email', 'password'));
            return response()->json(['token' => auth()->user()->token]);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'email atau password salah']);
        }
    }
}
