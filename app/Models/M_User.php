<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class M_User extends Model
{
    use HasFactory;

    public static function get_data(){
        // $query = Db::table('users')->get();
        Db::enableQueryLog();
        $query = Db::table('users')->where("id",1)->get();
        //$query = end($query);
        //dd($query);
       // return Db::getQueryLog();
       return $query;
    }
}
