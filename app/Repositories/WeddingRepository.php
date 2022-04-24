<?php 

namespace App\Repositories;

use App\Models\Wedding;

class WeddingRepository extends Repository {

	public function __construct(Wedding $wedding)
	{
		$this->model = $wedding;
	}

}

 ?>