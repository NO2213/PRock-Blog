<?php 
$this_page = 'dashboard';

require_once('tail.php');
require_once(TAIL.'config/config.php');
require_once(TAIL.'includes/function.php');
require_once(TAIL.'includes/arrays.php');

$PAGE_TITLE 	= 'Posts ';
$KEYWORDS		= '';
$DESCRIPTION	= '';
$BANNER_MODE	= 'none-0';

require_once('header.php');

# Validation message	STARTS
$ValidationMessage = '';
if (count($ErrorCodes) > 0)
{
	foreach ($ErrorCodes as $k=>$v)
	{
		if (isset($_REQUEST[$v]))
		{
		$ValidationMessage .= websiteRecursiveErrorDisplay($v, $_REQUEST[$v], 'websiteValidation');
		}
		else
		{
		continue;
		}
	}
}
# Validation message	ENDS

$CONTENT = '';
$action  = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
$aid     = isset($_REQUEST['aid'])    ? $_REQUEST['aid']    : '';
$USERID  = isset($_SESSION['USERID']) ? $_SESSION['USERID'] : '';

switch ($action)
{
default:
	$CONTENT = '<div class="col-md-12 posts_indiv">
			<div style="margin-top:0px; margin-bottom:20px;">
			<a class="btn btn-primary btn-sm" href="page=author_post&action=add" role="button">ADD NEW POST</a>
			</div>
			</div>';

	$sql = "SELECT p.*, a.fname, a.lname 
			FROM ".PR_DATABASE.".posts p 
			LEFT JOIN ".PR_DATABASE.".authors a ON p.author_id=a.id
			WHERE p.author_id='$USERID'
			ORDER BY p.posted_date DESC
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

			$Title 		 = strip_tags(trim($title));
			$Title	     = (strlen($Title) > 60) ? substr($Title,0,60).'...' : $Title;

			$Content 	 = strip_tags(trim($content));
			$Content	 = (strlen($Content) > 360) ? substr($Content,0,360).'...' : $Content;

			$CONTENT 	.= '<div class="col-md-4 posts_lists">
				            <h3>'.$Title.'</h3>
				            <div style="float:left; width:100%; margin-bottom:10px;">
				            	<small style="float:left;">You</small>
				            	<small style="float:right;">'.$PostedDate.'</small>
				            </div>
				            <p class="posts_lists_content">'.$Content.'</p>
				            <p align="center">
				            <a class="btn btn-default btn-sm" href="page=author_post&aid='.$post_id.'" role="button">Details</a>
				            <a class="btn btn-primary btn-sm" href="page=author_post&action=edit&aid='.$post_id.'" role="button">Edit</a>
				            <a class="btn btn-danger btn-sm" href="#a" role="button">Delete</a>
				            </p>
				          </div>';
		}
	}
	else
	{
		$CONTENT 	.= '<div class="col-md-12">No records found</div>';
	}
break;

case 'add':
case 'edit':
	$HTML_File = 'post_add.html';
	if ($action == 'edit')
	{
		$TITLE = 'EDIT POST';
		$sql = "SELECT * FROM ".PR_DATABASE.".posts WHERE id='$aid'";
		$qry = mysqli_query($mysqli, $sql);
		if (mysqli_num_rows($qry) > 0)
		{
			$res = mysqli_fetch_object($qry);
			
			$post_id     = $res->id;
			$title 		 = trim($res->title);
			$content 	 = trim($res->content);
			$posted_date = trim($res->posted_date);
			$PostedDate  = date('d M Y h:i A', strtotime($posted_date));
		}
	}
	else
	{
		$TITLE = 'ADD NEW POST';
		$title = '';
		$Content = '';
	}
break;

case 'view':
	$sql = "SELECT p.*, a.fname, a.lname 
			FROM ".PR_DATABASE.".posts p 
			LEFT JOIN ".PR_DATABASE.".authors a ON p.author_id=a.id
			WHERE p.id='$aid'
			ORDER BY p.posted_date DESC
		   ";
	$qry = mysqli_query($mysqli, $sql);
	if (mysqli_num_rows($qry) > 0)
	{
		$res = mysqli_fetch_object($qry);
		
		$post_id     = $res->id;
		$title 		 = trim($res->title);
		$content 	 = trim($res->content);
		$author_id 	 = trim($res->author_id);
		$fullname	 = trim($res->fname.' '.$res->lname);
		$posted_date = trim($res->posted_date);
		$PostedDate  = date('d M Y h:i A', strtotime($posted_date));

		$CONTENT 	.= '<div class="col-md-12 posts_indiv">
			            <h3>'.$title.'</h3>
			            <div style="float:left; width:100%; margin-bottom:10px;">
			            	<small style="float:left;">'.$fullname.'</small>
			            	<small style="float:right;">'.$PostedDate.'</small>
			            </div>
			            <p class="posts_lists_content">'.nl2br($content).'</p>
			          </div>';
	
	}

	$CONTENT 	.= '<div style="margin-top:10px; margin-bottom:50px;"><a class="btn btn-primary btn-sm" href="page=author_post" role="button"><< Back</a></div>';
break;	
}


//------------------------- Converting HTML to PHP variables	STARTS -------------------------
$HTML_File    = empty($HTML_File) ? 'author_posts.html' : $HTML_File;
$File 		  = file(ACTIVATED_THEME.$HTML_File);
$FContent 	  = join("", $File);
$FileContent  = preg_replace_callback("/{{(.*?)}}/","replace_engine", $FContent);

print $FileContent;
//------------------------- Converting HTML to PHP variables	ENDS -------------------------

require_once('footer.php');
?>