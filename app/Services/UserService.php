<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    /**
     * @param $email
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }
}
