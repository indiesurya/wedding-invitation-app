<?php

namespace App\Http\Livewire\Event;

use App\Repositories\EventRepository;
use App\Traits\FileTrait;

use Illuminate\Http\Request;

use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

	use WithFileUploads, FileTrait;

	public $event, $photo;

	protected $rules = [
		'event.name' => '',
		'event.date' => 'required|date',
		'event.location' => 'required|string',
		'photo' => 'image|nullable'
	];

	public function save()
	{
		$this->validate(array_merge($this->rules, [
			'event.name' => 'required|string|max:30|unique:events,name,'.$this->event->id,
		]));

		if ($this->photo) {
			$photo = $this->upload($this->photo);

			$this->event->photo = $photo;
		}

		$this->event->save();

		session()->flash('success', 'Sukses Mengedit Acara');
		return redirect('admin/event');
	}

	public function mount(Request $request, EventRepository $eventRepo)
	{
		$this->event = $eventRepo->find($request->event);
	}

    public function render()
    {
        return view('livewire.event.edit');
    }
}
