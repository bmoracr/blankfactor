<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return json_encode([
        "(GET): Obtain a user by ID" => "http://localhost:8888/api/user/{:id}",
        "(POST): Add new user" => "http://localhost:8888/api/user/"
    ]);
});
