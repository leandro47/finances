<?php

namespace App\Repositories;

use App\Models\UserModel;

class UserRepository
{
    protected $user;

    public function getAuth(string $login, string $password)
    {
        $user = new UserModel();

        return $user->where([
            'login' => $login,
            'password' => $password
        ])
        ->get()
        ->getRow();
    }
}