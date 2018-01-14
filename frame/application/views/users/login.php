<div class="row">
<div class="col-lg-12">

    <h2>Login</h2>
    <?php
    if(!empty($success_msg)){
        echo '<div class="alert alert-success">'.$success_msg.'</div>';
    }elseif(!empty($error_msg)){
        echo '<div class="alert alert-danger">'.$error_msg.'</div>';
    }
    ?>
    <form action="" method="post">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="dhiraj@ymail.com">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" value="123123" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn btn-primary" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Don't have an account? <a href="<?php echo base_url(); ?>index.php/users/registration">Register here</a></p>

    <hr />
    <p>
    demo username: dhiraj@ymail.com <br />
    demo password: 123123
    </p>
</div>
</div>