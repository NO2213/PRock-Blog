<?php
$controller = (isset($_REQUEST['controller'])) ? $_REQUEST['controller'] : 'index';
$controller_file = $controller.'.php';

$page_full_path = 'website/'.$controller_file;

# link to the page	STARTS
if (file_exists($page_full_path))
{
	require_once($page_full_path);
}
else
{
	require_once('website/404.php');
}
# link to the page	ENDS

?>