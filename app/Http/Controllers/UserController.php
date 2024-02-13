<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class UserController extends Controller
{

    public function new(){
        return view('admin.users.users-new');
    }

}
