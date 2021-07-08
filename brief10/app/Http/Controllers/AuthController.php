<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:32'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required', 'confirmed']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('app_token')->plainTextToken;

        $res = [
            'data' => [
                'token' => $token
            ],
            'error' => null
        ];

        return response($res, 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'data' => null,
                'error' => 'Invalid Credentials'
            ], 401);
        }

        $token = $user->createToken('app_token')->plainTextToken;

        $response = [
            "data" => [
                "token" => $token
            ],
            "error" => null
        ];

        return response($response, 200);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response('Signed out.', 200);
    }

    public function user(Request $request)
    {
        return $request->user();
    }
}