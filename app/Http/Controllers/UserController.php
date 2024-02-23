<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAndUpdateUser;

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
    public function index(Request $request)
    {
        $users = $this->user->index($request);
        return view('admin.users.users-all', compact('users'));
    }
    public function edit(Request $request, $id)
    {
        $user = $this->user->find($id);
        return view('admin.users.users-new', compact('user'));
    }

    public function store(StoreAndUpdateUser $request)
    {
        $user =   $this->user->newUser($request);

        return response()->json(['name' => $user->name]);
    }

    public function update(StoreAndUpdateUser $request)
    {
        $user = $this->user->updateUser($request);

        return response()->json(['name' => $user->name]);
    }
}
