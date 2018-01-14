<?php 
$this_page = 'dashboard';

require_once('tail.php');
require_once(TAIL.'config/config.php');
require_once(TAIL.'includes/function.php');
require_once(TAIL.'includes/arrays.php');

$PAGE_TITLE 	= 'Home ';
$KEYWORDS		= '';
$DESCRIPTION	= '';
$BANNER_MODE	= 'none-0';

require_once('header.php');

$CONTENT = '';

$CONTENT = '
<div class="container">
<div class="row dashboard">
<div class="col-lg-4">
  <!--<img data-src="holder.js/100px280?theme=thumb" alt="">-->
  <a href="page=author_post"><p class="card-text" align="center">MY POSTS</p></a>
</div>
<div class="col-lg-4">
  <a href="page=author_comment"><p class="card-text" align="center">MY COMMENTS</p></a>
</div>
<div class="col-lg-4">
  <a href="#a"><p class="card-text" align="center">MY ACCOUNT</p></a>
</div>
</div>
<br /><br />
</div>
';

//------------------------- Converting HTML to PHP variables	STARTS -------------------------
$File 		  = file(ACTIVATED_THEME.'general.html');
$FContent 	  = join("", $File);
$FileContent  = preg_replace_callback("/{{(.*?)}}/","replace_engine", $FContent);

print $FileContent;
//------------------------- Converting HTML to PHP variables	ENDS -------------------------

require_once('footer.php');
?>