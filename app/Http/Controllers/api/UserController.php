<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registers() {
        return response(UserModel::getUsers());
    }

    public function save(Request $request) {
        if (UserModel::createUser($request)) {
            return response("Registered", 200);
        } else {
            return ["message" => "Error"];
        }
    }
}
