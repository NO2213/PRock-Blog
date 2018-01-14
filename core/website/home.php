<?php 
$this_page = 'home';

require_once('tail.php');
require_once(TAIL.'config/config.php');
require_once(TAIL.'includes/function.php');
require_once(TAIL.'includes/arrays.php');

$PAGE_TITLE 	= 'Home ';
$KEYWORDS		= '';
$DESCRIPTION	= '';
$BANNER_MODE	= 'none-0';

require_once('header.php');

$CONTENT_POSTS = '';

$sql = "SELECT p.*, a.fname, a.lname 
		FROM ".PR_DATABASE.".posts p 
		LEFT JOIN ".PR_DATABASE.".authors a ON p.author_id=a.id
		ORDER BY p.posted_date DESC
		LIMIT 4
	   ";
$qry = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($qry) > 0)
{
	while ($res = mysqli_fetch_object($qry))
	{
		$post_id     = $res->id;
		$title 		 = trim($res->title);
		$content 	 = trim($res->content);
		$author_id 	 = trim($res->author_id);
		$fname	 	 = trim($res->fname);
		$posted_date = trim($res->posted_date);
		$PostedDate  = date('d M Y h:i A', strtotime($posted_date));

		//$Title 		 = strip_tags(trim($title));
		//$Title	     = (strlen($Title) > 60) ? substr($Title,0,60).'...' : $Title;

		$Content 	 = strip_tags(trim($content));
		$Content	 = (strlen($Content) > 300) ? substr($Content,0,300).'...' : $Content;

		if (isset($USERID) && ($USERID == $author_id))
		$Name = '<span class="badge btn-primary">You<span>';
		else
		$Name = '<span class="badge">'.$fname.'<span>';

		$CONTENT_POSTS 	.= '
		<div class="blog-post">
            <h2 class="blog-post-title">'.$title.'</h2>
            <p class="blog-post-meta">
            '.$PostedDate.' by <a href="#">'.$Name.'</a>
            <a class="label label-success pull-right" href="page=posts&aid='.$post_id.'#disqus_thread" role="button">0 Comment</a>
            </p>
            <p>'.$Content.'</p>
            <p align="right">
            <a class="btn btn-primary btn-sm" href="page=posts&aid='.$post_id.'" role="button">Read More &raquo;</a>
            </p>
        </div><hr />';
	}
}

//------------------------- Converting HTML to PHP variables	STARTS -------------------------
$File 		  = file(ACTIVATED_THEME.'home.html');
$FContent 	  = join("", $File);
$FileContent  = preg_replace_callback("/{{(.*?)}}/","replace_engine", $FContent);

print $FileContent;
//------------------------- Converting HTML to PHP variables	ENDS -------------------------

require_once('footer.php');
?>