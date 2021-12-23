<?php
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

#Route for user resources
Route::resources(['users' => UserController::class]);

#Here i let you the middleware if you need a Bearer validation by sanctum
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) { return false; });