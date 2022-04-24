<?php 

namespace App\Repositories;

use App\Models\Rsvp;

class RSVPRepository extends Repository {

	public function __construct(Rsvp $rsvp)
	{
		$this->model = $rsvp;
	}

	public function get(): Object
	{
		return $this->model->paginate(10);
	}

}

 ?>