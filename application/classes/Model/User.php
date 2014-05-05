<?php defined('SYSPATH') or die('No direct access allowed.');
 
class Model_User extends Model_Auth_User {

    /**
     * Rules for the user model. Because the password is _always_ a hash
     * when it's set,you need to run an additional not_empty rule in your controller
     * to make sure you didn't hash an empty string. The password rules
     * should be enforced outside the model or with a model helper method.
     *
     * @return array Rules
     */
    public function rules()
    {
        return array(
            'username' => array(
                array('not_empty'),
                array('max_length', array(':value', 32)),
                array(array($this, 'unique'), array('username', ':value')),
            ),
            'name' => array(
                array('not_empty'),
            ),
            'password' => array(
                array('not_empty'),
            ),
            'email' => array(
                array('not_empty'),
                array('email'),
                array(array($this, 'unique'), array('email', ':value')),
            ),
        );
    }

    /**
     * Password validation for plain passwords.
     *
     * @param array $values
     * @return Validation
     */
    public static function get_password_validation($values)
    {
        return Validation::factory($values)
            ->rule('password', 'min_length', array(':value', 6))
            ->rule('password_confirm', 'matches', array(':validation', ':field', 'password'));
    }

    /**
     * Create a new user
     *
     * @param array $values
     * @param array $expected
     * @throws ORM_Validation_Exception
     */
    public function create_user($values, $expected)
    {
        // Validation for passwords
        $extra_validation = Model_User::get_password_validation($values)
            ->rule('password', 'not_empty');

        $expected[] = 'activation_hash';
        $values['activation_hash'] = Text::random('alnum', 32);
        return $this->values($values, $expected)->create($extra_validation);
    }

    public function logged_in()
    {
        return User::logged_in();
    }

    public function activate()
    {
        $this->status = 'activated';
        $this->activation_hash = NULL;
        $this->save();
    }
}