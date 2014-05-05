<?php defined('SYSPATH') or die('No direct access allowed.');
 
class Model_Task extends ORM {
    
    protected $_belongs_to = array('project' => array());

    public function rules()
    {
        return array(
            'date' => array(
                array('not_empty'),
            ),
            'project_id' => array(
                array('not_empty'),
            ),
            'task' => array(
                array('not_empty'),
            ),
            'hours' => array(
                array('not_empty'),
            ),
        );
    }
}