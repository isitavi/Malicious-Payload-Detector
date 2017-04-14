<?php include(app_path().'/includes/site_header.php');?>
<?php include(app_path().'/includes/site_header_menu.php');?>


	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
	<?php if (count($errors) > 0) {?>
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      
      <?php 
      foreach ($errors->all() as $error) {
            echo '<li>'. $error.'</li>';
      }
      ?>
</ul>
</div>

    <?php } ?>		
				<div class="col-sm-4 col-sm-offset-1">

  <div class="login-form"><!--login form-->
						<h2>Login to your account</h2>





<form method="POST" class="form-horizontal m-t-20" action="<?php echo url('auth/login');?>">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
<input type="text" type="text" required="" placeholder="Email" name="email" value="<?php echo old('email');?>" />


<input type="password" required="" placeholder="Password" name="password" />
							<span>
<input type="checkbox" class="checkbox" name="remember"> 
								Keep me signed in
							</span>

 <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit">Login</button>


 <a href="<?php echo url('password/email');?>"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
 </form> 









					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>


<form method="POST" action="<?php echo url('auth/register');?>">

<input type="hidden" name="_token" value="<?php echo csrf_token();?>">

<input class="" type="text" required="" placeholder="First Name" name="fname" value="<?php echo old('fname');?>">
<input class="" type="text" required="" placeholder="Username" name="uname" value="<?php echo old('uname');?>">
<input class="" type="text" required="" placeholder="Personal Id" name="pid" value="<?php echo old('pid');?>">
<input class="" type="text" required="" placeholder="Mobile" name="mobile" value="<?php echo old('mobile');?>">


<input class="" type="email" required="" placeholder="Email" name="email" value="<?php echo old('email');?>">



 <div class="form-group">

  <select class="form-control" id="sel1" name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>

  </select>
</div>


<input class="" type="password" required="" placeholder="Password" name="password">

<input class="" type="password" required="" placeholder="Confirm Password" name="password_confirmation">

<input id="checkbox-signup" type="checkbox" checked="">
                                <label for="checkbox-signup">
                                    I accept <a href="#">Terms and Conditions</a>
                                </label>                  
                

                            <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit">Register</button>



                </form> 









					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<?php include(app_path().'/includes/site_footer.php');?>
	
	
	