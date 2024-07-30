<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function loginGet()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {

        $credentials = $request->only('username', 'password');


        $adminUsername = env('ADMIN_USERNAME');
        $adminPassword = env('ADMIN_PASSWORD');
        $token = env('TOKEN');


        if ($credentials['username'] === $adminUsername && $credentials['password'] === $adminPassword) {
            
            return redirect()->route('admin.dashboard')->cookie(
                'token', $token, 60 // 60 minutes
            );
        } else {
      
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }
    public function logout()
    {
        return redirect('/')->withCookie(Cookie::forget('token'));
    }
}
