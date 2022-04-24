<?php

namespace App\Http\Livewire\Event;

use App\Repositories\EventRepository;

use Livewire\Component;

class Table extends Component
{

	protected $listeners = ['delete'];

	public function delete(EventRepository $eventRepo, int $id)
	{
		$eventRepo->delete($id);

		session()->flash('success', 'Sukses Menghapus Acara');
	}

    public function render(EventRepository $eventRepo)
    {
    	$events = $eventRepo->get();

        return view('livewire.event.table', compact('events'));
    }
}
