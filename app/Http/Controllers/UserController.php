<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registers()
    {
        return 801;
    }

    public function save(Request $request)
    {
        dd($request->all());
    }
}
