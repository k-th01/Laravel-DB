<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Connect to MySQL Tutorial #26
    function users() {
        $users= DB::select('select * from users');
        return view('users',["users"=>$users]);
    }

    function getInfo(){
        $response = Http::get('https://jsonplaceholder.typicode.com/users/10');
        $response = $response->body();
        return view('client', ['info'=>json_decode($response)]);
    }

}