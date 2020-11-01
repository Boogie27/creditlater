<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Web\Category;
use App\Models\Web\User;
use App\Models\Web\Auth;

use DB;
use Session;

class UserController extends Controller
{
    public function index()
    {
        //get all category
        // Session::forget('user');
        $sideCategories = Category::where('is_feature', 1)->get();  

        return view('web.register', compact('sideCategories'));
    }




    public function store(Request $request)
    {
        $data = $request->validate([
                'first_name' => 'required|min:3|max:50',
                'last_name' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:20'
            ]);

        $user = User::create($data);
        Auth::login($request->email);

        return redirect('/');
    }


// end
}
