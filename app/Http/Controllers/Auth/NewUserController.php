<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewUserController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'email'     => 'bail|required|unique:users|max:255',
            'name'      => 'required|min:2|max:255',
            'password'  => 'required|min:8|max:255',
        ]);

        $newUser = User::create([
            'email'     => $request->email,
            'name'      => $request->name,
            'password'  => Hash::make($request->password),
        ]);

        $token = $newUser->createToken('New Access Token')->accessToken;
        $newUser->token = $token;

        return response()->json($newUser, 201, ['Accept' => 'application/json']);
    }
}
