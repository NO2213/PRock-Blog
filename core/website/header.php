<?php
require_once('tail.php');
require_once(TAIL.'config/config.php');
require_once(TAIL.'includes/function.php');
require_once(TAIL.'includes/arrays.php');

$menu_home 		= ($this_page == 'home')	  ? 'active' : '';
$menu_posts 	= ($this_page == 'posts') 	  ? 'active' : '';
$menu_dashboard = ($this_page == 'dashboard') ? 'active' : '';
$menu_login 	= ($this_page == 'login')     ? 'active' : '';
$menu_register  = ($this_page == 'register')  ? 'active' : '';

############################################################################################
#							HEADER LOGIN/LOGOUT				STARTS
############################################################################################
if (isset($_SESSION['USERID']))
{
	$LOGIN_LOGOUT = '
	<li class="'.$menu_dashboard.'"><a href="page=dashboard" class="nav-link">Dashboard</a></li>
	<li><a href="page=logout" class="nav-link">Logout</a></li>
	';
}
else
{
	$LOGIN_LOGOUT = '
    <li class="'.$menu_login.'"><a class="nav-link" href="page=login">Login</a></li>
    <li class="'.$menu_register.'"><a class="nav-link" href="page=register">Register</a></li>
    ';
}
############################################################################################
#							HEADER LOGIN/LOGOUT				ENDS
############################################################################################



$Header_File   	= file(ACTIVATED_THEME.'header.html');
$HeadContent   	= join("", $Header_File);
$HeaderContent1 = preg_replace_callback("/{{(.*?)}}/","replace_engine", $HeadContent);
$HeaderContent  = preg_replace_callback("/{[{(.*?)}]}/","replace_engine_constant", $HeaderContent1);

print $HeaderContent;
?>