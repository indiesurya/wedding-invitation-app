<?php

namespace App\Http\Livewire\Auth;

use App\Services\AuthService;

use Livewire\Component;

class Login extends Component
{

	public $email, $password, $remember;

	protected $rules = [
		'email' => 'required|email|exists:users',
		'password' => 'required|string',
	];

	public function login(AuthService $auth)
	{
		$credentials = $this->validate();
		$remember = !is_null($this->remember);

		if ($auth->login($credentials, $remember)) {
			session()->flash('success', 'Sukses Login');
			return redirect('/admin');
		} else {
			$this->addError('password', 'Password Salah');
		}
	}

    public function render()
    {
        return view('livewire.auth.login');
    }
}
