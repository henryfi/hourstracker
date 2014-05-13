<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller {

	public function before()
	{
		if( ! User::logged_in())
		{
			$this->_respond(304);
		}
	}

	private function _respond($status_code, $data = NULL)
	{
		$this->response->headers('Content-Type','application/json');
		if(is_array($data))
		{
			$this->response->body(json_encode($data));
		}
	}

	public function action_get_currentuser()
	{
		$user = User::instance();
		if($user->logged_in())
		{
			$resp = array(
				'id' => (int) $user->id,
				'username' => $user->username
			);

			$this->_respond(200, $resp);
		}
		else
		{
			$this->_respond(304);
		}
	}

	public function action_post_user()
	{
		$post = $this->_post();

		//print_r($data); exit;

		// Create the user using form values
		$pw = Text::random('alnum', 16);
        $data = array(
        	'name' => $post['name'],
        	'email' => $post['email'],
            'username' => $post['username'],
            'password' => $pw,
            'password_confirm' => $pw,
        );

       	try {
	        $user = ORM::factory('User')->create_user($data, array(
	        	'name',
	        	'username',
	            'password',   
	            'email'                 
	        ));
	        
	        // Grant user login role
	        $user->add('roles', ORM::factory('role', array('name' => 'login')));
	        $resp = array('id' => $user->id);
			$this->_respond(200, $resp);
    	}
    	catch(Exception $e) {
    		$this->_respond(400);
    	}

        /*
		$task = ORM::factory('Task');
 		$resp = array('id' => $user->id);
		$this->_respond(200, $resp);
		*/
	}

	public function action_get_users()
	{
		$query = '
			SELECT 
				id,
				name,
				username,
				email
			FROM users
		';
		$res = DB::query(Database::SELECT, $query)->execute();

		
 		$resp = $res->as_array();
		$this->_respond(200, $resp);
	}

	public function action_get_users_admin()
	{
		$query = '
			SELECT 
				id,
				name,
				username,
				email,
				status,
				activation_hash
			FROM users
		';
		$res = DB::query(Database::SELECT, $query)->execute();

		
 		$resp = $res->as_array();
		$this->_respond(200, $resp);	
	}


	public function action_get_projects()
	{
		$p = ORM::factory('Project');
		$all = $p
				->where('deleted_at', 'IS', NULL)
				->order_by('id', 'asc')->find_all();

		$resp = array();
		foreach($all as $p) {
			$arr = $p->as_array();
			$arr['id'] = (int) $arr['id'];
			$resp[] = $arr;
		}

		$this->_respond(200, $resp);
	}

	public function action_get_my_tasks()
	{
		$this->action_get_tasks(array('users' => array(User::id())));
	}

	public function action_get_tasks($filters = array())
	{
		$filters = Arr::merge($filters, $_GET);
		$f = $this->_filters($filters, array('startDate', 'endDate', 'projects', 'users'));

		$query = '
			SELECT 
				tasks.id,
				tasks.task,
				tasks.date,
				tasks.hours,
				projects.name AS project,
				users.id AS by_user_id,
				users.name AS by_user_name
			FROM tasks, projects, users
			WHERE 
				tasks.project_id = projects.id
			AND tasks.user_id = users.id
			AND tasks.deleted_at IS NULL
		';

		$query .= ($f['startDate']) ? ' AND tasks.date >= '.$f['startDate'] : '';
		$query .= ($f['endDate']) ? ' AND tasks.date <= '.$f['endDate'] : '';
		$query .= ($f['projects']) ? ' AND tasks.project_id IN('.$f['projects'].')' : '';
		$query .= ($f['users']) ? ' AND tasks.user_id IN('.$f['users'].')' : '';

		$res = DB::query(Database::SELECT, $query)->execute();

 		$resp = $res->as_array();

		$this->_respond(200, $resp);
	}

	public function action_get_task()
	{
		$id = $this->request->param('id');
	}

	public function action_post_task()
	{	
		$data = $this->_post();

		$task = ORM::factory('Task');
		$task->date = $data['date'];
		$task->project_id = $data['project'];
		$task->user_id = User::id();
		$task->task = $data['task'];
		$task->hours = $data['hours'];
		$task->save();

		$resp = array('id' => $task->id);
		$this->_respond(200, $resp);
	}

	public function action_delete_task()
	{
		$id = $this->request->param('id');
		$task = ORM::factory('Task')->where('id', '=', $id)->find();
		$task->hide();
	}

	public function action_post_project()
	{	
		$data = $this->_post();

		$p = ORM::factory('Project');
		$p->name = $data['name'];
		$p->save();
	}

	public function action_delete_project()
	{
		$id = $this->request->param('id');
		$p = ORM::factory('Project')->where('id', '=', $id)->find();
		$p->hide();
	}

	private function _post() 
	{
		$data = file_get_contents("php://input");
		return json_decode($data, TRUE);
	}

	private function _filters($arr, $whitelist = array()) 
	{
		$filters = array();

		foreach($whitelist as $col)
		{
			$filters[$col] = FALSE;
		}

		foreach($arr as $key => $value)
		{
			if(in_array($key, $whitelist))
			{
				if(is_array($value))
				{
					array_walk($value, function(&$v, $key) { 
				    	$v = Database::instance('default')->escape($v);
				    }); 
					
					$filters[$key] = implode(',', $value);

				}
				else
				{
					$filters[$key] = Database::instance('default')->escape($value);
				}
			}
		}

		return $filters;
	}

	public function action_get_menu()
	{
		if(User::has_role('login'))
		{
			$menu = array(
				array('url' => '#task', 'label' => 'Tasks'),
			);	
		}
		if(User::has_role('admin'))
		{
			$menu = array(
				array('url' => '#task', 'label' => 'Tasks'),
				array('url' => '#reports', 'label' => 'Reports'),
				array('url' => '#projects', 'label' => 'Projects'),
				//array('url' => '#users', 'label' => 'Users'),
			);	
		}

		$this->_respond(200, $menu);
	}

} // End Welcome
