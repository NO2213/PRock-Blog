<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <h2>Register</h2>
    <form action="<?php echo site_url('users/registration'); ?>" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="fName" placeholder="First Name" required="" value="<?php echo !empty($user['fName'])?$user['fName']:''; ?>">
          <?php echo form_error('fName','<span class="help-block alert alert-danger">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="lName" placeholder="Last Name" required="" value="<?php echo !empty($user['lName'])?$user['lName']:''; ?>">
          <?php echo form_error('lName','<span class="help-block alert alert-danger">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email_address" placeholder="Email" required="" value="<?php echo !empty($user['email_address'])?$user['email_address']:''; ?>">
          <?php echo form_error('email_address','<span class="help-block alert alert-danger">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="conf_password" placeholder="Confirm password" required="">
          <?php echo form_error('conf_password','<span class="help-block alert alert-danger">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="submit" name="regisSubmit" class="btn btn-primary" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>index.php/users/login">Login here</a></p>      

    <hr />
    <p class="text-warning">
        Issue facing: <mark>$this->form_validation->run()</mark> is always return false even its true so the form is not storing. Will check again.
    </p>        
</div>
</body>
</html>