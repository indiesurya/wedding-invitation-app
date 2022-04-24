<?php

namespace App\Http\Livewire;

use App\Repositories\LocationRepository;
use App\Traits\FileTrait;

use Livewire\Component;
use Livewire\WithFileUploads;

class Location extends Component
{

	use WithFileUploads, FileTrait;

	public $location, $image;

	protected $rules = [
		'image' => 'image|nullable'
	];

	public function save()
	{
		$this->validate();

		if ($this->image) {
			$image = $this->upload($this->image);

			$this->location->image = $image;
		}

		$this->location->save();

		session()->flash('success', 'Sukses Menyimpan Lokasi');
	}

	public function mount(LocationRepository $locationRepo)
	{
		$this->location = $locationRepo->getFirst();
	}
    public function render()
    {
        return view('livewire.location');
    }
}
