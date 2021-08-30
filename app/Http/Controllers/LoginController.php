<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            //$request->session()->regenerate();

            return response()->json([
                "data" => Auth::user(),
            ]);
        }

        return response()->json([
            "message"=>"The given data was invalid.",
            "errors"=>["email"=>["The provided credentials do not match our records."]]
        ]);
    }
}
