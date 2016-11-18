<?php

namespace App\Http\Controllers\Api;

use App\Data\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function register(Request $request)  
	{
	    $this->validate($request, [
	        'name' => 'required|max:255',
	        'email' => 'required|email|max:255|unique:users',
	        'password' => 'required|min:6',
	    ]);

	    $user = User::create(
	        [
	            'email' => $request->email,
	            'name' => $request->name,
	            'password' => bcrypt($request->password)
	        ]);
	    return $user;
	}
}
