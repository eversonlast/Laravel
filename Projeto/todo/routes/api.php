<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks", function(){
    $tasks = [
        [
            "id"=> 1,
            "name"=> "Estudar o PHP 7",
            "complete"=> false
        ],
        [
            "id"=> 2,
            "name"=> "Estudar o Javascript",
            "complete"=> true
        ]
    ];

    return $tasks;
});
