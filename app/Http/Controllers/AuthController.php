<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view ('register');
    }

    public function registerPost(Request $request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        // dd($data);

        return view ('welcome', compact('first_name', 'last_name'));
    }
}
