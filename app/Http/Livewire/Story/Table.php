<?php

namespace App\Http\Livewire\Story;

use App\Repositories\StoryRepository;

use Livewire\Component;

class Table extends Component
{

	protected $listeners = ['delete'];

	public function delete(StoryRepository $storyRepo, int $id)
	{
		$storyRepo->delete($id);

		session()->flash('success', 'Sukses Menghapus Cerita');
	}

    public function render(StoryRepository $storyRepo)
    {
    	$stories = $storyRepo->get();

        return view('livewire.story.table', compact('stories'));
    }
}
