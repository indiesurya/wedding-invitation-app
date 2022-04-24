<?php

namespace App\Http\Livewire\Gallery;

use App\Repositories\GalleryRepository;
use App\Traits\FileTrait;

use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

	use WithFileUploads, FileTrait;

	public $photo;

	protected $rules = [
		'photo' => 'required|image'
	];

	public function save(GalleryRepository $galleryRepo)
	{
		$this->validate();

		$photo = $this->upload($this->photo);

		$data = [
			'photo' => $photo
		];

		$galleryRepo->create($data);

		session()->flash('success', 'Sukses Menambahkan Foto');
		return redirect('/admin/gallery');
	}
    public function render()
    {
        return view('livewire.gallery.create');
    }
}
