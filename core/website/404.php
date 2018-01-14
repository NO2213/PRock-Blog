<?php
require_once('tail.php');
require_once(TAIL.'config/config.php');
require_once(TAIL.'includes/function.php');


$Header_File   	= file(ACTIVATED_THEME.'404.html');
$HeadContent   	= join("", $Header_File);

$HeaderContent1 = preg_replace_callback("/{{(.*?)}}/","replace_engine", $HeadContent);
$HeaderContent  = preg_replace_callback("/{[{(.*?)}]}/","replace_engine_constant", $HeaderContent1);

print $HeaderContent;
?>