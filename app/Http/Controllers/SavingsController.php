<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\savings;
class SavingsController extends Controller
{
    public function home()
    {
        return view('savingsCatcher');
    }

    public function savings()
    {
        $savings = \App\savings::all();

        return view('saving', ['savings' => $savings]);
    }



    public function purchases()
    {
        
        return view('create');
    }

    public function store()
    {
        $savings = new savings();

        $savings -> totalPrice = request('totalPrice');
        $savings -> OutPocketPrice = request('outPocketPrice');
        $savings -> totalSavings = request('totalSavings');
        $savings -> user_id = request('user_id');

        $savings ->save();
        
        return redirect('/');
        
    }

    //public function saving()
    //{
      //  $saving = savings::all();

        //return $saving->SUM('totalSavings');
    //}

    public function saving()
    {
        $saving = savings::all();

        $total = $saving->SUM('totalSavings');

        return view('total', ['total' => $total]);
    }
}

