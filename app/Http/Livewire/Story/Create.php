<?php

namespace App\Http\Livewire\Story;

use App\Repositories\StoryRepository;
use App\Traits\FileTrait;

use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

	use WithFileUploads, FileTrait;

	public $title, $date, $content, $photo;

	protected $rules = [
		'title' => 'required|string|max:30|unique:stories',
		'date' => 'required|date',
		'content' => 'required|string',
		'photo' => 'required|image'
	];

	public function save(StoryRepository $storyRepo)
	{
		$this->validate();

		$photo = $this->upload($this->photo);

		$data = [
			'title' => $this->title,
			'date' => $this->date,
			'content' => $this->content,
			'photo' => $photo
		];

		$storyRepo->create($data);

		session()->flash('success', 'Sukses Menambahkan Cerita');
		return redirect('/admin/story');
	}

    public function render()
    {
        return view('livewire.story.create');
    }
}
