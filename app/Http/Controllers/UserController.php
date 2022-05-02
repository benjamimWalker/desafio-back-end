<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function auth(UserRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken("JWT");
            return response()->json($token->plainTextToken);
        }
        else {
            return response()->json(['error' => 'Invalid email or password'], 401);
        }
    }

    public function unauthorized()
    {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    public function signup(UserRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);

        $user->save();

        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }
}
