<?php

namespace App\Http\Livewire;

use App\Repositories\BannerRepository;
use App\Traits\FileTrait;

use Livewire\Component;
use Livewire\WithFileUploads;

class Banner extends Component
{

	use WithFileUploads, FileTrait;

	public $banner, $image;

	protected $rules = [
		'banner.text' => 'required|string|max:20',
		'image' => 'image|nullable'
	];

	public function save()
	{
		$this->validate();

		if ($this->image) {
			$image = $this->upload($this->image);

			$this->banner->image = $image;
		}

		$this->banner->save();

		session()->flash('success', 'Sukses Menyimpan Banner');
	}

	public function mount(BannerRepository $bannerRepo)
	{
		$this->banner = $bannerRepo->getFirst();
	}

    public function render()
    {
        return view('livewire.banner');
    }
}
