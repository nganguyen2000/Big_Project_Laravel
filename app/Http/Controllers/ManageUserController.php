<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageUserController extends Controller
{
    function index(){
        $users = DB::table('users')->get();
        return view("admin.user.index",["users"=>$users]);
    }
}
