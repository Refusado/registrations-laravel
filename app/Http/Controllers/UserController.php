<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registers()
    {
        return view('user.register');
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:8"
        ]);

        if (UserModel::createUser($request)) {
            return view('user.success', [
                "name" => $request->input('name')
            ]);
        } else {
            echo "Falha ao salvar dados no banco";
        }

    }
}
