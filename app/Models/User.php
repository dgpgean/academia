<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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



    public function newUser(Request $request)
    {

        $request->birthday =  date('d-m-Y', strtotime($request->birthday));

        $request->validate([
            'name' => 'required',
            'birthday' => 'required',
            'email' => 'required|unique:users',
            'sex' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Nome do usuário',
            'birthday.required' => 'Data de nascimento',
            'email.required' => 'E-mail',
            'sex.required' => 'sexo',
            'password.required' => 'Senha',
            'unique' => 'Email já cadastrado'
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->photo->store('users');
        }

        return User::create($request->all());
    }
}
