<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller {

	public function action_task()
	{
		$this->response->body(View::factory('Task'));
	}

	public function action_reports()
	{
		$this->_require_role('admin');
		$this->response->body(View::factory('Reports'));
	}

	public function action_projects()
	{
		$this->_require_role('admin');
		$this->response->body(View::factory('Projects'));
	}

	public function action_users()
	{
		$this->_require_role('admin');
		$this->response->body(View::factory('Users'));
	}

	private function _require_role($role)
	{
		if( ! User::has_role($role))
		{
			exit('Permission denied');
		}
	}
} // End Welcome
