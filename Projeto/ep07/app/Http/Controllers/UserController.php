<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();

        if($user){
            echo "<h1>Cadastro do Usuário</h1> <br>";
            echo "<p>Nome: {$user->name}</p><br>";
            echo "<p>Email: {$user->email}</p><br>";
        }
        
        $address = $user->address()->first();

        // dd($address);

        if($address){
            echo "<h1>Endereço</h1> <br>";
            echo "<p>Endereço Completo: {$address->street}, {$address->number}</p><br>";
            echo "<p>Cidade: {$address->city}|{$address->state}</p><br>";
        }

        $posts = $user->post()->get();

        if($posts){
            echo "<h1>Posts</h1> <br>";
            foreach($posts as $post){                
                echo "<p>{$post->id} - {$post->title} | {$post->subtitle}</p><br>";
                echo "<p>Conteúdo: {$post->content}</p><br>";
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
