<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(User $user){
        // $user = new User();
        // $user->name = 'Everson';
        // $user->email = 'everson@teste.br';
        // $user->password = Hash::make('123');
        // $user->save();
        // echo "<h1>Listagem de Usuários</h1>";

        $user = User::where('id','=', 1)->first();
        return view('listUsers', [
            'user'=>$user
        ]);        
    }

}
