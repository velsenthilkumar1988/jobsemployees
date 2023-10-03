<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-lg-oush-4 col-md-push-4">
            <div class="panel panel-default" style="margin-top: 50px;">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <?php echo form_open('home/login_process');?>
                            <div class="form-group">
                                <label for="">User Name :</label>
                                <input type="text" class="form-control" placeholder="Enter User Name" name="u_name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password :</label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="u_pass" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" name="u_login" value="Login as Admin">
                                <a href="<?php echo site_url('home/register_page');?>" class="btn btn-primary">Register</a>
                            </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
   
