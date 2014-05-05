<?php defined('SYSPATH') OR die('No direct script access.');

class ORM extends Kohana_ORM {
	
	public function save(Validation $validation = NULL)
	{
		$this->before_save();
		parent::save($validation);
	}

	public function hide()
	{
		$this->deleted_at = date('Y-m-d H:i:s');
		$this->save();
	}

	public function before_save()
	{

	}
}
