<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


use App\Http\Controllers\Controller;


class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function new()
    {
        return view('admin.users.users-new');
    }

    public function store(Request $request)
    {
        $this->user->newUser($request);

        return redirect()->back();
    }
}
