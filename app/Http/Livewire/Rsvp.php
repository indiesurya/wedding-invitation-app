<?php

namespace App\Http\Livewire;

use App\Repositories\RSVPRepository;

use Livewire\Component;

class Rsvp extends Component
{

	protected $listeners = ['delete'];

	public function delete(RSVPRepository $rsvpRepo, int $id)
	{
		$rsvpRepo->delete($id);

		session()->flash('success', 'Sukses Menghapus RSVP');
	}

    public function render(RSVPRepository $rsvpRepo)
    {
    	$rsvps = $rsvpRepo->get();

        return view('livewire.rsvp', compact('rsvps'));
    }
}
