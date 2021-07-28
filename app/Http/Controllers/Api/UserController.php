<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        //Display all data with QueryScope
        $users = User::get()->all();
        return $users;
    }


    public function store(Request $request) {
        $request->validate([
            'token_id'      => 'required|string|max:255|unique:users',
            'address'       => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:8|confirmed',
            'name'          => 'required|string|max:255',
            'phone'         => 'required|string|max:15',
            'position'      => 'required|string|max:25' 
        ]);
        

        //Create new record
        $user = User::create($request->all());

        //Response
        return response($user, 200);
    }


    public function show(User $user)
    {
        //Display unique data
        return $user;
    }

    public function showPosition(Request $request) {
        //dd($request->position);
        $user = User::filter();
        return $user;
        
    }

}
