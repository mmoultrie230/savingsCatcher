<?php

namespace App\Http\Controllers;
use \App\users;
use Illuminate\Http\Request;

class UsersController extends Controller
{


    public function users()
    {
        $users = \App\users::all();

        return view('users', ['users' => $users]);
    }
    public function page()
    {
        
        return view('createUser');
    }

    public function store()
    {
        $users = new users();

        $users -> firstName = request('firstName');
        $users -> lastName = request('lastName');
        $users -> userName = request('userName');
        $users -> email = request('email');

        $users ->save();
        
        return redirect('/');
        
    }

}