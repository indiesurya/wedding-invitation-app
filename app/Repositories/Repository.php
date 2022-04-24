<?php 

namespace App\Repositories;

class Repository {

	public $model;

	public function create(array $data)
	{
		$this->model->create($data);
	}

	public function update(int $id, array $data)
	{
		$model = $this->find($id);
		$model->update($data);
	}

	public function delete(int $id)
	{
		$model = $this->find($id);
		$model->delete();
	}

	public function find(int $id): Object
	{
		return $this->model->findOrFail($id);
	}

	public function get(): Object
	{
		return $this->model->get();
	}

	public function getFirst(): Object
	{
		return $this->model->first();
	}

}

 ?>