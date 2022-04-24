<?php 

namespace App\Repositories;

use App\Models\About;
use Cache;

class AboutRepository extends Repository {

	public function __construct(About $about)
	{
		$this->model = $about;
	}

	public function getFirst(): Object
	{
		return Cache::get('about', function() {
			return $this->model->first();
		});
	}

}

 ?>