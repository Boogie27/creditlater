<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Web\Category;
use App\Models\Web\User;
use App\Models\Web\Auth;


use Session;
use Validator;

class LoginController extends Controller
{
    public function index()
    {
        //get all category
        $sideCategories = Category::where('is_feature', 1)->get();  

        return view('web.login', compact('sideCategories'));
    }




    public function show(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'
        ]);

        if($validate)
        {
            $user = USer::where('email', $request->email)->first();
            if(!$user)
            {
               return back()->withErrors('The email '.$request->email.' does not exist');
            }
            if(!Hash::check($request->password, $user->password))
            {
               return back()->withErrors('Wrong password, please try again');
            }
            Auth::login($request->email);
        }
        return redirect('/');
    }





    public function login_ajax(Request $request)
    {
        if($request->ajax())
        {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|',
                'password' => 'required|min:6|max:12',
            ]);
            
        
    
            if($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }else{
                $user = User::where('email', $request->email)->first();
                if(!$user)
                {
                    return response()->json(['errors'=> array('The email '.$request->email.'does not exist')]);
                }else if(!Hash::check($request->password, $user->password))
                {
                    return response()->json(['errors'=> array('Wrong password, try again')]);
                }else{
                    Auth::login($request->email);
                    $user->active = 1;
                    $user->save();
                }
            }

        }
        return response()->json(['data'=> true]);
    }

    // end
}
