<?php

namespace App\Http\Livewire;

use App\Repositories\NavbarRepository;

use Livewire\Component;

class Navbar extends Component
{

	public $navbar;

	protected $rules = [
		'navbar.about' => 'required|string',
		'navbar.story' => 'required|string',
		'navbar.event' => 'required|string',
		'navbar.gallery' => 'required|string',
		'navbar.location' => 'required|string',
		'navbar.rsvp' => 'required|string'
	];

	public function save()
	{
		$this->validate();
		$this->navbar->save();

		session()->flash('success', 'Sukses Menyimpan Navbar');
	}

	public function mount(NavbarRepository $navbarRepo)
	{
		$this->navbar = $navbarRepo->getFirst();
	}

    public function render()
    {
        return view('livewire.navbar');
    }
}
