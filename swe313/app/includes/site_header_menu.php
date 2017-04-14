  <body>
  <header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a href=""><i class="fa fa-phone"></i>+0081234567</a></li>
                <li><a href=""><i class="fa fa-envelope"></i> info@domainhosting.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="social-icons pull-right">
              <ul class="nav navbar-nav">
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo pull-left">
              <a href="<?php echo url();?>"><img src="<?php echo url("");?>/images/home/new_logo.png" alt="" style="width: 60%;" /></a>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
<li><a href="<?php echo url("checkout");?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>


<?php




if (Auth::guest()){
echo '<li><a href="'.url().'/login"><i class="fa fa-lock"></i> login</a></li>';

       }
     else {


echo '<li><a href="'.url().'/help" class=""><i class="fa  fa-pencil"></i>Help</a></li>';




echo '<li><a href="'.url().'/logout"><i class="fa fa-power-off"></i> Logout</a></li>';


     }

      ?>          
                  
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->
  
    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="<?php echo url();?>">Home</a></li>
               

                 <li><a href="<?php echo url("alltest");?>">All Packages</a></li>
                  <li><a href="<?php echo url("about");?>">About Us</a></li>
                <li><a href="<?php echo url("contact");?>">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="search_box pull-right">
             


<form method="GET" action="search">
  <input type="text" name="name">
</form>
























            </div>
          </div>
        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->
