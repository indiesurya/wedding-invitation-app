<?php 

namespace App\Repositories;

use App\Models\Event;

class EventRepository extends Repository {

	public function __construct(Event $event)
	{
		$this->model = $event;
	}

	public function get(): Object
	{
		return $this->model->orderBy('date', 'asc')->take(6)->get();
	}


}

 ?>