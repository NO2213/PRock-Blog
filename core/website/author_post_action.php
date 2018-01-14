<?php 
require_once('tail.php');
require_once(TAIL.'config/config.php');
require_once(TAIL.'includes/function.php');
require_once(TAIL.'includes/arrays.php');

$Return = '';

if ($_POST)
{
$USERID  		  = isset($_SESSION['USERID']) 		  ? $_SESSION['USERID']				 : '';
$post_id   		  = isset($_POST['post_id']) 		  ? trim($_POST['post_id']) 		 : '';
$action   		  = isset($_POST['action']) 		  ? trim($_POST['action']) 			 : '';
$title   		  = isset($_POST['title']) 		  	  ? trim($_POST['title'])			 : '';
$content          = isset($_POST['content']) 		  ? trim($_POST['content']) 		 : '';
$flag			  = 1;
$e      		  = '';

if ($action == 'edit')
{

	#===================================================================
	#					Validation	STARTS
	#===================================================================

	#===================================================================
	#					Validation	ENDS
	#===================================================================

	#===================================================================
	#					DB Insert	STARTS
	#===================================================================
	$posted_date = date('Y-m-d H:i:s', time());
	$sql = "UPDATE ".PR_DATABASE.".posts SET 
			title='".$mysqli->real_escape_string($title)."',
			content='".$mysqli->real_escape_string($content)."',
			last_edited_date='".$mysqli->real_escape_string($posted_date)."' 
			WHERE id='$post_id'";
	if (mysqli_query($mysqli, $sql)) {
	    $Return = 's=212'; // success
	} else {
	    $Return = 'e=302';; // error mysqli_error($mysqli);
	}

	header('Location: page=author_post&action=edit&aid='.$post_id.'&'.$Return);
	exit();
	#===================================================================
	#					DB Insert	ENDS
	#===================================================================

}
else
{
	#===================================================================
	#					Validation	STARTS
	#===================================================================

	#===================================================================
	#					Validation	ENDS
	#===================================================================

	#===================================================================
	#					DB Insert	STARTS
	#===================================================================
	$posted_date = date('Y-m-d H:i:s', time());
	$sql = "INSERT INTO ".PR_DATABASE.".posts
	(title, content, author_id, posted_date) VALUES 
	('".$mysqli->real_escape_string($title)."', '".$mysqli->real_escape_string($content)."', '".$mysqli->real_escape_string($USERID)."', '".$mysqli->real_escape_string($posted_date)."')";

	if (mysqli_query($mysqli, $sql)) {
	    $Return = 's=211'; // success
	} else {
	    $Return = 'e=302';; // error mysqli_error($mysqli);
	}

	$last_id = mysqli_insert_id($mysqli);

	header('Location: page=author_post&action=edit&aid='.$last_id.'&'.$Return);
	exit();
	#===================================================================
	#					DB Insert	ENDS
	#===================================================================
	
}

}

header('Location: page=author_post&'.$Return);
exit();

?>