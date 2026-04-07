<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddFamily;

class FamilyController extends Controller
{
    public function AddFam(Request $request){
        $member = new AddFamily();
        $member -> nickname = $request->nickname;
        $member -> vk = $request->vk;
        $member -> tg = $request->tg;
        $member -> family = $request->family;
        $member -> save();

        return redirect('/family');
    }

    public function showFamily() {
        $all_members = AddFamily::all(); 
        
        return view('family', ['members' => $all_members]); 
    }
}
