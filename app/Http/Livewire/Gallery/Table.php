<?php

namespace App\Http\Livewire\Gallery;

use App\Repositories\GalleryRepository;

use Livewire\Component;

class Table extends Component
{

	protected $listeners = ['delete'];

	public function delete(GalleryRepository $galleryRepo, int $id)
	{
		$galleryRepo->delete($id);

		session()->flash('success', 'Sukses Menghapus Foto');
	}

    public function render(GalleryRepository $galleryRepo)
    {
    	$galleries = $galleryRepo->get();

        return view('livewire.gallery.table', compact('galleries'));
    }
}
