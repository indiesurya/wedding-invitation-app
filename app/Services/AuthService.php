<?php 
	
namespace App\Services;

use Auth;

class AuthService {

	public function login(array $credentials, bool $remember): Bool
	{
		return Auth::attempt($credentials, $remember);
	}

	public function logout()
	{
		return Auth::logout();
	}

}

 ?>