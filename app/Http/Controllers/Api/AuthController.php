<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
  public function login()
  {
    $credentials = [
      'email' => request('email'),
      'password' => request('password')
    ];
    if (Auth::attempt($credentials)) {
      $user = Auth::user();
      $success['token'] = $user->createToken('myApp')->accessToken;
      return response()->json(['success' => $success], 200);
    } else {
      return response()->json(['error' => 'Unauthorised'], 401);
    }
  }

  public function register(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required',
      'c_password' => 'required|same:password'
    ]);

    if ($validator->fails()) {
      return response()->json(['error' => $validator->errors()], 401);
    }

    $inputs = $request->all();
    $inputs['password'] = bcrypt($inputs['password']);
    $user = User::create($inputs);
    $success['token'] = $user->createToken('myApp')->accessToken;
    $success['name'] = $user->name;
    return response()->json(['success' => $success], 200);
  }

  public function details()
  {
    $user = Auth::user();
    return response()->json(['success' => $user], 200);
  }
}
