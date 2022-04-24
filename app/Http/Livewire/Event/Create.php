<?php

namespace App\Http\Livewire\Event;

use App\Repositories\EventRepository;
use App\Traits\FileTrait;

use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

	use WithFileUploads, FileTrait;

	public $name, $date, $location, $photo;

	protected $rules = [
		'name' => 'required|string|max:30|unique:events',
		'date' => 'required|date',
		'location' => 'required|string',
		'photo' => 'required|image'
	];

	public function save(EventRepository $eventRepo)
	{
		$this->validate();

		$photo = $this->upload($this->photo);

		$data = [
			'name' => $this->name,
			'date' => $this->date,
			'location' => $this->location,
			'photo' => $photo
		];

		$eventRepo->create($data);

		session()->flash('success', 'Sukses Menambahkan Cerita');
		return redirect('/admin/event');
	}

    public function render()
    {
        return view('livewire.event.create');
    }
}
