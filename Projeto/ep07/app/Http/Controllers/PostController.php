<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        echo "<h1>Post</h1> <br>";
        echo "<p>{$post->id} - {$post->title} | {$post->subtitle}</p><br>";
        echo "<p>Conteúdo: {$post->content}</p><br>";

        $user = $post->author()->first();
        
        if($user){
            echo "<h1>Autor</h1> <br>";
            echo "<p>Nome: {$user->name}</p><br>";
            echo "<p>Email: {$user->email}</p><br>";
        }

        $categories = $post->category()->get();
        
        if($categories){
            echo "<h1>Categoria</h1> <br>";
            foreach($categories as $category){
                echo "<p>Código: {$category->id}</p><br>";
                echo "<p>Nome: {$category->name}</p><br>";
                echo "<p>Descrição: {$category->subtitle}</p><br>";
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
