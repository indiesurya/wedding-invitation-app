<?php 

namespace App\Repositories;

use App\Models\Story;

class StoryRepository extends Repository {

	public function __construct(Story $story)
	{
		$this->model = $story;
	}

	public function get(): Object
	{
		return $this->model->orderBy('date', 'asc')->take(5)->get();
	}

}

 ?>