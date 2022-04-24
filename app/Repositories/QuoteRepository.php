<?php 

namespace App\Repositories;

use App\Models\Quote;

class QuoteRepository extends Repository {

	public function __construct(Quote $quote)
	{
		$this->model = $quote;
	}

}

 ?>