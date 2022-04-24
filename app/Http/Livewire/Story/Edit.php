<?php

namespace App\Http\Livewire\Story;

use App\Repositories\StoryRepository;
use App\Traits\FileTrait;

use Illuminate\Http\Request;

use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

	use WithFileUploads, FileTrait;

	public $story, $photo;

	protected $rules = [
		'story.title' => '',
		'story.date' => 'required|date',
		'story.content' => 'required|string',
		'photo' => 'image|nullable'
	];

	public function save()
	{
		$this->validate(array_merge($this->rules, [
			'story.title' => 'required|string|max:30|unique:stories,title,'.$this->story->id,
		]));

		if ($this->photo) {
			$photo = $this->upload($this->photo);

			$this->story->photo = $photo;
		}

		$this->story->save();

		session()->flash('success', 'Sukses Mengedit Cerita');
		return redirect('admin/story');
	}

	public function mount(Request $request, StoryRepository $storyRepo)
	{
		$this->story = $storyRepo->find($request->story);
	}

    public function render()
    {
        return view('livewire.story.edit');
    }
}
