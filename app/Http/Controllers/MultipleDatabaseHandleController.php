<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MultipleDatabaseHandleController extends Controller
{
    //

    public function user_list()
    {
           $database = env('DB_DATABASE');
           $users = DB::table('users')->get();
           $total_usres = count($users);
           return view('user.list', compact('users', 'database', 'total_usres'));
    }

    public function change_db_connection($db)
    {
           if($db == "db-1"){
            $database = env('DB_DATABASE');
            $users = DB::table('users')->get();
           }
           elseif($db == "db-2"){
            $database = env('DB_DATABASE_2');
            $users = DB::connection('mysql2')->table('users')->get();
           }
           else{
            $database = env('DB_DATABASE_3');
            $users = DB::connection('mysql3')->table('users')->get();
           }

           $total_usres = count($users);
           return view('user.list', compact('users', 'database', 'total_usres'));
    }
}
