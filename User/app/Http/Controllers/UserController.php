<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
//use Validator;
use App\Http\Requests\NewUser;
class UserController extends Controller
{
    public function getlist()
    {
        $user = User::paginate(2);        // getlist and 2 product on page
        return view('danhsach', compact('user'));
    }


    public function postadd(NewUser $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->pass = $request->pass;
        $user->save();
        return redirect('list');
    }

    public function postdelete(Request $request)
    {
        User::destroy($request->checkbox);
        return redirect('list');
    }

    public function postedit()
    {

    }
}



