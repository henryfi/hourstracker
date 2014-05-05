<?php defined('SYSPATH') OR die('No direct script access.');

class User {

	// Auth instances
	protected static $_instance;
	protected static $_config;
	protected static $_context;

	protected $_model;
	protected $_roles;

	/**
	 * Singleton pattern
	 *
	 * @param bool $reload. If TRUE, will always create a new instance.
	 * @return Model_User
	 */
	public static function instance($reload = FALSE)
	{
		if ( ! isset(User::$_instance) OR $reload)
		{
			$user = ORM::factory('User');

			if(User::logged_in())
			{
				$uid = Auth::instance()->get_user(); // TODO check if this is right
				
				$user->where('id', '=', $uid)->find();

				if( ! $user->loaded())
				{
					// Something went wrong
					Auth::instance()->logout();
					return User::instance(TRUE);
				}
			}

			User::$_instance = $user;
		}

		return User::$_instance;
	}

	public static function role()
	{
		$roles = User::instance();

		//print_r($roles->roles); exit;
	}

	public static function has_role($role)
	{
		if(User::instance()->has('roles', ORM::factory('Role', array('name' => $role)))) {
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Checks that the given email is valid and not in use
	 *
	 * @param string $email
	 */
	public static function valid_email($email)
	{
		if(Valid::email($email))
		{
			$user = Entity::factory('user')->load(
				array(
					'criteria' => array(
						'email' => $email,
					)
				)
			);

			// No user found, the given email is OK
			if( ! $user->loaded())
			{
				return TRUE;
			}
		}

		return FALSE;
	}

	public function __construct($config)
	{
		$this->_config = $config;
	}
	
	/**
	 * Check if user is logged in
	 *
	 */
	public static function logged_in()
	{
		return Auth::instance()->logged_in();
	}

	/**
	 * Return the current user ID
	 *
	 */
	public static function id()
	{
		return Auth::instance()->get_user()->id;
	}

	/**
	 * Returns the user model
	 *
	 */
	public function model()
	{
		return (isset($this->_model)) ? $this->_model : FALSE;
	}
}