<?php 

namespace App\Repositories;

use App\Models\Banner;

class BannerRepository extends Repository {

	public function __construct(Banner $banner)
	{
		$this->model = $banner;
	}

}

 ?>