<?php include(app_path().'/includes/site_header.php');?>
<?php include(app_path().'/includes/site_header_menu.php');?>
 <section id="">



<form class="form-horizontal" role="form" method="POST" action="email">
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
      ?>;
</ul>
</div>

    <?php } ?>    


<?php if (session('status')) {
      echo '<div class="alert alert-success">';
      echo session('status');
      echo '</div>';
    }
    ?>








                <div class="col-sm-9 col-sm-offset-1">

  <div class="login-form"><login form>







  






<input class="form-control" name="_token" value="<?php echo csrf_token();?>" type="hidden">

<h2> Reset Password</h2>


 <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Enter your <b>Email</b> and instructions will be sent to you!
                    </div>
                    <div class="m-b-0"> 
                        <div class="input-group"> 
                            <input class="form-control input-lg" placeholder="Enter Email" required="" name="email" value="<?php echo old('email');?>" type="email"> 
                       

   <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit">Send</button>



                        </div> 
                    </div> 
                    
                </form>









                    </div>
                </div>


            </div>
        </div>
    </section>
        
 
<?php include(app_path().'/includes/site_footer.php');?>