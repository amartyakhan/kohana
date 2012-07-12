<?php
class Model_Useritem extends ORM {
	protected $_table_name  = 'user_items';
	protected $_belongs_to = array('user' => array(),'item' => array());
}
