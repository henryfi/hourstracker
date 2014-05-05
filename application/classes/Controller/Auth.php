<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {

	public function action_login()
	{
        $view = View::factory('Login');

        if( ! empty($_POST['username']) && ! empty($_POST['password']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $success = Auth::instance()->login($username, $password);
            if($success)
            {
                HTTP::redirect('home');
            }
            else
            {
                $view->set('errors', array('Incorrect username or password'));
            }
        }

        $this->response->body($view);
	}

    public function action_logout()
    {
        Auth::instance()->logout();
        HTTP::redirect('');
    }

    public function action_activate()
    {
        $hash = $this->request->param('param');
        if(empty($hash)) 
        {
            $this->redirect('');
        }
        $user = ORM::factory('User')->where('activation_hash', '=', $hash)->find();
        if($user->loaded()) 
        {

            $view = View::factory('Activate');

            $validation = Validation::factory($this->request->post()) 
                ->rule('password', 'not_empty')
                ->rule('password', 'min_length', array(':value', 6))
                ->rule('confirm',  'matches', array(':validation', ':field', 'password'));
                //$user->activate();

            if($validation->check())
            {
                $user->password = $_POST['password'];
                $user->activate();

                // Always redirect after a successful POST to prevent refresh warnings
                $this->redirect('');
                
            }
            else if( ! empty($_POST))
            {
                // Validation failed, collect the errors
                $errors = $validation->errors('user');
                $view->set('errors', $errors);

            }

            
            $view->set('user', $user);
            $this->response->body($view);
        }
        else
        {
            $this->redirect('');
        }
    }

} // End Welcome
