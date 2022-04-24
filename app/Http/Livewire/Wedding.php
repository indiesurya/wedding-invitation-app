<?php

namespace App\Http\Livewire;

use App\Repositories\WeddingRepository;

use Livewire\Component;

class Wedding extends Component
{

	public $wedding;

	protected $rules = [
		'wedding.date' => 'required|date|after:today',
		'wedding.time' => 'required|date_format:H:i:s',
		'wedding.location' => 'required|string',
		'wedding.iframe' => 'required|string',
	];

	public function save()
	{
		$this->validate();
		$this->wedding->save();

		session()->flash('success', 'Sukses Menyimpan Pernikahan');
	}

	public function mount(WeddingRepository $weddingRepo)
	{
		$this->wedding = $weddingRepo->getFirst();
	}

    public function render()
    {
        return view('livewire.wedding');
    }
}
