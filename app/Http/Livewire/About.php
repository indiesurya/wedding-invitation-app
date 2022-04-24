<?php

namespace App\Http\Livewire;

use App\Repositories\AboutRepository;
use App\Traits\FileTrait;

use Livewire\Component;
use Livewire\WithFileUploads;

class About extends Component
{

	use WithFileUploads, FileTrait;

	public $about, $man_photo, $woman_photo;

	protected $rules = [
		'about.man_name' => 'required|string',
		'about.man_nickname' => 'required|string',
		'about.man_father' => 'required|string',
		'about.man_about' => 'required|string',
		'about.woman_name' => 'required|string',
		'about.woman_nickname' => 'required|string',
		'about.woman_father' => 'required|string',
		'about.woman_about' => 'required|string',
		'man_photo' => 'image|nullable',
		'woman_photo' => 'image|nullable'
	];

	public function save()
	{
		$this->validate();

		if ($this->man_photo) {
			$man_photo = $this->upload($this->man_photo);

			$this->about->man_photo = $man_photo;
		}

		if ($this->woman_photo) {
			$woman_photo = $this->upload($this->woman_photo);

			$this->about->woman_photo = $woman_photo;
		}

		$this->about->save();
		
		session()->flash('success', 'Sukses Memperbarui Pasangan');
	}

	public function mount(AboutRepository $about)
	{
		$this->about = $about->getFirst();
	}

    public function render()
    {
        return view('livewire.about');
    }
}
