<?php

namespace App\Http\Livewire\Gallery;

use App\Repositories\GalleryRepository;
use App\Traits\FileTrait;

use Illuminate\Http\Request;

use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

    use WithFileUploads, FileTrait;

    public $gallery, $photo;

    protected $rules = [
        'gallery.photo' => 'image|nullable'
    ];

    public function save()
    {
        $this->validate(array_merge($this->rules, [
            'gallery.photo' => 'required|string|max:30|unique:stories,title,' . $this->gallery->id,
        ]));

        if ($this->photo) {
            $photo = $this->upload($this->photo);

            $this->gallery->photo = $photo;
        }

        $this->gallery->save();

        session()->flash('success', 'Sukses Mengedit Cerita');
        return redirect('admin/gallery');
    }

    public function mount(Request $request, galleryRepository $galleryRepo)
    {
        $this->gallery = $galleryRepo->find($request->gallery);
    }

    public function render()
    {
        return view('livewire.gallery.edit');
    }
}
