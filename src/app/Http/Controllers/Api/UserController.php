<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #Validating api request data inconming
        $fields = $request->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'

        ]);
        #Creating a new user
        $user = User::create([

            'name' => $fields['name'],
            'last_name' => $fields['last_name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])

        ]);
        #Creating a new user personal access token
        $token = $user->createtoken('costumerToken')->plainTextToken;
        #Getting response with user info and access token
        $response = [ 'user' => $user, 'token' => $token ];
        #returning response with status code and data
        return response($response, 201);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id) ? json_encode(['code'=>200, 'result'=>User::find($id)]) : json_encode(['code'=>100, 'result'=>'not found']);
        
    }
}
