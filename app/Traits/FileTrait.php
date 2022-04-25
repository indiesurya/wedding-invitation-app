<?php 

namespace App\Traits;

trait FileTrait {

	public function upload(object $file): String
	{
		$fileName = $this->getFileName($file);
		$file->storePubliclyAs('img/', $fileName);

		return $fileName;
	}

	public function getFileName(object $file): String
	{
		$originalName = $file->getClientOriginalName();
		$originalName = pathinfo($originalName, PATHINFO_FILENAME);

		$time = time();

		$extension = $file->extension();

		return $originalName.'-'.$time.'.'.$extension;
	}

}

 ?>