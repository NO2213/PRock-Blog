<?php
require_once(INCLUDES_PATH.'function.php');

define('SELECT_LABEL', '[select]');

$YesNoArray  = array('yes' => 'Yes',
					 'no'  => 'No'
					 );

$StatusArray  = array('active'	 => 'Active',
					  'inactive' => 'Inactive'
					 );

$ErrorCodes    = array('s', 'e', 'i', 'w', 'ls', 'le'); // Starts with 'l' for login page

?>