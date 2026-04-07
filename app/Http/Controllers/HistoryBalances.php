<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryBalance;
use App\Models\Reye;

class HistoryBalances extends Controller
{
    public function AddMoney(Request $request){
        $addmoney = new HistoryBalance();
        $addmoney -> addsumma = $request->addsumma;
        $addmoney -> save();

        $user = Reye::first();
        $all_history = HistoryBalance::all();

        return view('profile', [
            'user' => $user,
            'addsummas' => $all_history
        ]);
    }

    public function AddHistory() {
        $all_history = AddHistory::all();
        $user = Reye::first(); 
        
        return view('profile', [
            'user' => $user,           
            'addsummas' => $all_history
        ]); 
    }
}
