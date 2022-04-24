<?php

namespace App\Http\Livewire;

use App\Repositories\CountdownRepository;
use App\Traits\FileTrait;

use Livewire\Component;
use Livewire\WithFileUploads;

class Countdown extends Component
{
	use WithFileUploads, FileTrait;

	public $countdown, $image;

	protected $rules = [
		'countdown.text' => 'required|string|max:30',
		'image' => 'image|nullable'
	];

	public function save()
	{
		$this->validate();

		if ($this->image) {
			$image = $this->upload($this->image);
			$this->countdown->image = $image;
		}

		$this->countdown->save();

		session()->flash('success', 'Sukses Menyimpan Countdown');
	}

	public function mount(CountdownRepository $countdownRepo)
	{
		$this->countdown = $countdownRepo->getFirst();
	}

    public function render()
    {
        return view('livewire.countdown');
    }
}
