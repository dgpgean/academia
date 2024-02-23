<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Http\Requests\StoreAndUpdateUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birthday',
        'sex',
        'photo',
        'code',
        'street',
        'neighborhood',
        'city',
        'phone',
        'plan',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function index(Request $request)
    {
        return User::where("name", 'LIKE', '%' . $request->filter . '%')
            ->orWhere('email', 'LIKE', '%' . $request->filter . '%')
            ->where('status', $request->status)
            ->paginate(6);
    }

    public function newUser(StoreAndUpdateUser $request)
    {

        $request->birthday =  date('d-m-Y', strtotime($request->birthday));

        if ($request->hasFile('photo')) {
            $path = $request->photo->store('users');
        }

        return User::create($request->all());
    }

    public function updateUser(StoreAndUpdateUser $request)
    {

        $request->birthday =  date('d-m-Y', strtotime($request->birthday));

        $user = $this->find($request->id);

        if ($request->hasFile('photo')) {
            $path = $request->photo->store('users');
        }


        if (!is_null($request->password)) {
            $user->update($request->all());
        } else {
            $user->update($request->except(['password']));
        }

        return $user;
    }
}
