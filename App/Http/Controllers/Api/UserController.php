<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;


class UserController extends \App\Http\Controllers\Controller
{
    public function all_users(){
        $users = \App\User::all();
        return $users;
    }
}
