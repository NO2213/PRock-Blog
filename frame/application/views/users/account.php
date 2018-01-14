<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>

<div class="container">
<div class="row">

<div class="col-lg-12">
    <h3>Welcome <?php echo $user['fname']; ?>!</h3>
    <div class="account-info">
        <p><b>Name: </b><?php echo $user['lname']; ?></p>
        <p><b>Email: </b><?php echo $user['email_address']; ?></p>
    </div>
</div>

</div>	

<div class="row dashboard">
<div class="col-lg-4">
  <!--<img data-src="holder.js/100px280?theme=thumb" alt="">-->
  <a href="<?php echo site_url('posts/authors'); ?>"><p class="card-text" align="center">MY POSTS</p></a>
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


</body>
</html>