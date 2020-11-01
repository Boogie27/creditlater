<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Web\Category;
use App\Models\Web\User;
use App\Models\Web\Auth;

use Session;
use Carbon\Carbon;

class LogoutController extends Controller
{
    public function create()
    {
        if(Auth::user())
        {
            $date = Carbon::now()->toDateTimeString();

            $user_email = Auth::user()['email'];
            $user = User::where('email', $user_email)->first();
            if(!$user)
            {
                Session::forget('user');
            }else{
                $user->active = 0;
                $user->last_login = $date;
                $user->save();
            }
            
            Auth::logout();
        }
        return back();
    }
}
