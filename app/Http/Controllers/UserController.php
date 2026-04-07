<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reye;

class UserController extends Controller
{
    public function register(Request $request) {
        $user = new Reye();
        $user->nickname = $request->nickname;
        $user->lvl = $request->lvl;
        $user->phone = $request->phone;
        $user->schet = $request->schet;
        $user->ts1 = $request->ts1;
        $user->ts2 = $request->ts2;
        $user->ts3 = $request->ts3;
        $user->ts4 = $request->ts4;
        $user->ts5 = $request->ts5;
        $user->home1 = $request->home1;
        $user->home2 = $request->home2;
        $user->save();
        
        return redirect('/profile/' . $user->id);
        
    }

    public function showProfile($id){
        $user = Reye::find($id);
        return view('profile', ['user' => $user]);
    }
}
