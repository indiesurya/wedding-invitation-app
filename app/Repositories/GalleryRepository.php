<?php 

namespace App\Repositories;

use App\Models\Gallery;

class GalleryRepository extends Repository {

	public function __construct(Gallery $gallery)
	{
		$this->model = $gallery;
	}

	public function get(): Object
	{
		return $this->model->take(9)->get();
	}

}

 ?>