<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{
    use HasFactory;

    protected $connection = 'sqlite';
    protected $table = 'user';

    public static function getUsers($limit)
    {
        $sql = self::select([
            "id",
            "name",
            "email",
            "register_date"
        ])
        ->limit($limit);

        dd($sql->toSql());
    }

    public static function createUser(Request $request)
    {
        $sql = self::insert([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => Hash::make($request->input('password')),
            "register_date" => DB::raw('NOW()')
        ]);

        dd($sql->toSql(), $request->all());
    }
}
