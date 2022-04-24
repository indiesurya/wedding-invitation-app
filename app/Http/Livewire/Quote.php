<?php

namespace App\Http\Livewire;

use App\Repositories\QuoteRepository;
use App\Traits\FileTrait;

use Livewire\Component;
use Livewire\WithFileUploads;

class Quote extends Component
{

	use WithFileUploads, FileTrait;

	public $quote, $image;

	protected $rules = [
		'quote.text' => 'required|string',
		'quote.footer' => 'required|string',
		'image' => 'image|nullable'
	];

	public function save()
	{
		$this->validate();

		if ($this->image) {
			$image = $this->upload($this->image);

			$this->quote->image = $image;
		}

		$this->quote->save();

		session()->flash('success', 'Sukses Menyimpan Quotes');
	}

	public function mount(QuoteRepository $quoteRepo)
	{
		$this->quote = $quoteRepo->getFirst();
	}
    public function render()
    {
        return view('livewire.quote');
    }
}
