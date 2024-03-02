<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if(!$token = auth()->attempt($credentials))
        {
            abort(401, 'Não autorizado.');
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            abort(404, 'Usuário não encontrado.');
        }
    
        return response()->json([
            'token' => $token,
            'user' => $user,
            'token_type' => 'bearer',
        ]);
    }
}
