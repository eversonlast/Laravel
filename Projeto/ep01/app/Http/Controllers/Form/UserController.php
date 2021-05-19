<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function storeUser(Request $request){
        $user =new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.listaAll');

    }

    public function formEditUser(User $user){
        return view('editUser', [
            'user'=>$user
        ]);
    }

    public function editUser(User $user, Request $request){
        $user->name = $request->name;

        if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            $user->email = $request->email;
        }

        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->route('users.listaAll');
    }

    public function destroyUser(User $user){
        $user->delete();
        return redirect()->route('users.listaAll');
    }
}
