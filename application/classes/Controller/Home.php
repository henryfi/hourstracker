<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
                /*
                // Create the user using form values
                $data = array(
                        'username' => 'admin',
                        'password' => 'foobar',
                        'password_confirm' => 'foobar',
                        'email' => 'admin@email.com'
                );
                $user = ORM::factory('User')->create_user($data, array(
                        'username',
                        'password',
                        'email'                         
                ));
                
                // Grant user login role
                $user->add('roles', ORM::factory('role', array('name' => 'login')));
                */

                if(User::logged_in())
                {
		      $this->response->body(View::factory('Home'));
                }
                else
                {
                        HTTP::redirect('auth/login');
                }

	}

} // End Welcome
