<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Web\User;
use Session;

class Auth extends Model
{   
    use HasFactory;

    public static function user()
    {
        if(Session::has('user'))
        {
            return Session::get('user');
        }
        return false;
    }




    public static function login($email)
    {
        if($email)
        {
            $user = User::where('email', $email)->first();
            if($user)
            {
                $userDetails = ['id' => $user->id, 'first_name' => $user->first_name, 
                'last_name' => $user->last_name, 'email' => $user->email, 
                'token' => $user->token, 'active' => $user->active];
                
                Session::put('user', $userDetails);
                return true;
            }
        }
        return false;
    }




    public static function logout()
    {
        if(Session::has('user'))
        {
            Session::forget('user');
            return true;
        }
        return false;
    }


    // end
}

