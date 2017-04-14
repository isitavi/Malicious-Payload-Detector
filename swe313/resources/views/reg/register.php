<?php include(app_path().'/includes/header.php');?>

            <body class="">
<?php include(app_path().'/includes/top-menu.php');?>
                <br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="tab-content-profile">
                                <!-- Tab panes -->
                                <div class="tab-content block-profiles responsive" style="margin-top: 28px;">
                                    <!-- Tab account details -->
                                    <div class="tab-pane fade in active" id="tab_account_details">
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


<div class="info-profile-page col-md-9 col-xs-12">
<h3>Creat New Account</h3>
 <hr>


<form action="<?php echo url();?>/reg" method="POST" enctype="multipart/form-data" name="create" id="create">


<input type="hidden" name="_token" value="<?php echo csrf_token();?>">



<div class="form-group">
<div class="form-group-control">
<label>Dit nvan</label>
<input type="text" class="form-control" id="name" name="name" placeholder="Dit nvan"  value="<?php echo old('name');?>">
 </div>
</div>
<div class="clearfix"></div>
 <div class="form-group">
<div class="form-group-control">
<label>Job title</label>
<input type="text" class="form-control" id="job-title" name="job_title" placeholder="HR-konsulent">
</div>
</div>
 <div class="clearfix"></div>
<div class="form-group">
<div class="form-group-control">
<label>Kon</label>
<input type="text" class="form-control" id="user-gender" name="user_gender" placeholder="kvinde">
</div>
</div>
<div class="clearfix"></div>
<div class="form-group">
<div class="form-group-control">
<label>Firma navn</label>
<input type="text" class="form-control" id="user-company-name" name="user_company_name" placeholder="Eventika IVS">
</div>
</div>
<div class="clearfix"></div>
<div class="form-group">
 <div class="form-group-control">
<label>Firma addresse</label>
<input type="text" class="form-control" id="user-company-address" name="user_company_address" placeholder="Eventikavej 23, 8000 Aarhus">
</div>
</div>
<div class="clearfix"></div>
<div class="form-group">
<div class="form-group-control">
 <label>Firma CVR</label>
<input type="text" class="form-control" id="user-company-cvr" name="user_company_cvr" placeholder="32452582">
</div>
</div>
<div class="clearfix"></div>
<div class="form-group">
<div class="form-group-control">
<label>Firma branches</label>
<input type="text" class="form-control" id="user-company-branche" name="user_company_branche" placeholder="Ledelse">
</div>
</div>


 <div class="clearfix"></div>
<div class="form-group">
<div class="form-group-control">
<label>Email</label>
<input style="width:100% !important;" type="email" class="form-control" id="email"  name="email"  placeholder="info@eventika.dk"  value="<?php echo old('email');?>">
</div>
</div>




<div class="clearfix"></div>
<div class="form-group">
<div class="form-group-control">
<label>Password</label>
<input style="width:100% !important;" type="password" class="form-control" name="password">

</div>
</div>
<div class="clearfix"></div>
<div class="form-group">
<div class="form-group-control">
<label>Confirm Password</label>
<input style="width:100% !important;" type="password" class="form-control" name="password_confirmation"></div>
</div>


<input type="file" name="myfile"><br>
<div class="progress">
<div class="bar"></div >
<div class="percent">0%</div >
</div>
<div id="status"></div>






<div class="clearfix"></div>
<br>
 <div class="form-group">
<input type="submit" class="btn-submit btn-sumary" name="" value="Sing Up">
</div>
</form>
</div>
</div>
</div>


                                </div>
                            </div>
                        </div>
                        <!-- sidebar -->
                        <div class="col-md-4" style="margin-top: 28px;">
                            <div id="tribe-events-content-wrapper" class="tribe-clearfix">
                                <div id="tribe-events-content" class="tribe-events-list">
                                    <!-- Events Loop -->
                                    <div class="events-loop tribe-events-loop vcalendar">
                                        <div class="row">
                                            <!-- Event  -->
                                            <div class="tribe-events-first col-sm-12">
                                                <div class="even-list-wrapper">
                                                    <div class="event-list-wrapper-top">
                                                        <div class="tribe-events-event-image">
                                                            <a href="#" title="WordCamp Cologne">
                                                            <img width="400" height="200" src="img/eventica-dummy-image-400x200.jpg" class="attachment-blog-thumbnail wp-post-image" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="tribe-events-event-date">
                                                            <span class="dd">00</span>
                                                            <span class="mm">July</span>
                                                            <span class="yy">2015</span>
                                                        </div>
                                                    </div>
                                                    <div class="event-list-wrapper-bottom">
                                                        <div class="wraper-bottom-left">
                                                            <!-- Event Title -->
                                                            <h2 class="tribe-events-list-event-title entry-title summary">
                                                                <a class="url" href="#" rel="bookmark">
                                                                Event Title</a>
                                                            </h2>
                                                            <!-- Event Meta -->
                                                            <div class="tribe-events-event-meta vcard">
                                                                <div class="author  location">
                                                                    <!-- Venue Display Info -->
                                                                    <div class="tribe-events-venue-details">
                                                                        Venue                     
                                                                    </div>
                                                                    <!-- .tribe-events-venue-details -->
                                                                    <div class="time-details">
                                                                        1 day                   
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .tribe-events-event-meta -->
                                                        </div>
                                                        <div class="wraper-bottom-right valign-wrapper">
                                                            <a href="#" class="more-link valign">
                                                            <i class="fa fa-ticket"></i>
                                                            <br><span class="cost">$47</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Event  -->                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar -->
                        






                        </div>
                    </div>
                </div>

<?php include(app_path().'/includes/footer.php');?>
               