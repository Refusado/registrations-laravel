<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{
    use HasFactory;

    protected $connection = 'sqlite';
    protected $table = 'users';

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
        // DB::enableQueryLog();

        return self::insert([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => Hash::make($request->input('password')),
            "register_date" => new Carbon()
        ]);

        // dd(DB::getQueryLog());
    }
}
