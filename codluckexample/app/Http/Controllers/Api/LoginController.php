<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $successStatus = 200;

    public function authenticate(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->input('remember', false)))
        {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyStore_Web')->accessToken;
            return response()->json(
                ['success' => $success],
                $this->successStatus
            );
        }

        return response()->json(
            ['error'=>'Phone or password is not valid'],
            422
        );
    }
}
