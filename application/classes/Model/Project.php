<?php defined('SYSPATH') or die('No direct access allowed.');
 
class Model_Project extends ORM {
    
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
            )
        );
    }
}