<?php 

namespace App\Repositories;

use App\Models\Navbar;

class NavbarRepository extends Repository {

	public function __construct(Navbar $navbar)
	{
		$this->model = $navbar;
	}

}

 ?>