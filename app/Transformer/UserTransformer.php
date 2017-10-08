<?php

/**
 * Created by IntelliJ IDEA.
 * User: fred
 * Date: 10/8/17
 * Time: 12:33 PM
 */

namespace App\Transformer;

class UserTransformer
{
    public function transform($user) {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'remember_token' => $user->remember_token,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at


        ];
    }

}