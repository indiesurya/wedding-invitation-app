<?php 

namespace App\Repositories;

use App\Models\Countdown;

class CountdownRepository extends Repository {

	public function __construct(Countdown $countdown)
	{
		$this->model = $countdown;
	}

}

 ?>