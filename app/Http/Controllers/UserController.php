<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registers()
    {
        return view('user.register');
    }

    public function save(Request $request)
    {
        dd($request->all());
    }
}
