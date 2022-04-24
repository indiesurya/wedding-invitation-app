<?php

namespace App\Http\Controllers\Admin;

use App\Services\AuthService;
use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
	public function logout(AuthService $auth): RedirectResponse
	{
		$auth->logout();
		return redirect('/');
	}
}
