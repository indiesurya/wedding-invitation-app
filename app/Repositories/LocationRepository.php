<?php 

namespace App\Repositories;

use App\Models\Location;

class LocationRepository extends Repository {

	public function __construct(Location $location)
	{
		$this->model = $location;
	}

}

 ?>