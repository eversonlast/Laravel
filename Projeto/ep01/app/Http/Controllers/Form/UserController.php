<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listAllUsers(){
        $user = User::all();

        return view("listsAllUsers", [
            'users' => $user
        ]);
    }

    public function listUser(User $user){
        return view('listUser', [
            'user'=>$user
        ]);
    }

    public function formAddUser(){
        return view("newAddUser");
    }
}
