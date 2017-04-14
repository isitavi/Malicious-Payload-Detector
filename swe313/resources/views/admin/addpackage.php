<?php include(app_path().'/includes/admin/admin_header.php');?>
<?php include(app_path().'/includes/admin/admin_header_menu.php');?>
 <!-- Top Bar End -->

 <!-- ========== Left Sidebar Start ========== -->
 <?php include(app_path().'/includes/admin/admin_left_menu.php');?>

 <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">General elements</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">General elements</li>
                                </ol>
                            </div>
                        </div>


                        

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form elements</h3></div>
                                    <div class="panel-body">
<form class="form-horizontal" role="form" action="<?php echo url('admin/addpackage');?>" method="POST" enctype="multipart/form-data">

<input type="hidden"  name="_token"    value="<?php echo csrf_token();?>">                               
<div class="form-group">
 <label class="col-md-2 control-label">Package Name</label>
 <div class="col-md-10"> 
 <input type="text" class="form-control" value="" name="name">
</div>
</div>

<div class="form-group">
 <label class="col-md-2 control-label">Price</label>
 <div class="col-md-10"> 
 <input type="text" class="form-control" value="" name="price">
</div>
</div>


<div class="form-group">
 <label class="col-md-2 control-label">Category</label>
 <div class="col-md-10"> 
 <input type="text" class="form-control" value="" name="cat">
</div>
</div>

<div class="form-group">
 <label class="col-md-2 control-label">Image</label>
 <div class="col-md-10"> 
 <input type="file" class="form-control" value="" name="img">
</div>
</div>

<?php
 $textarea = array("Description"=>"des");
foreach( $textarea as $title => $name) {?>
<div class="form-group">
<label class="col-md-2 control-label"><?php echo $title;?> </label>
<div class="col-md-10">
<textarea class="form-control" rows="3" name="<?php echo $name;?>">
    
</textarea>
</div>
</div>
<?php
}
?>

 





         




















<button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
</form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->



            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

  <?php include(app_path().'/includes/admin/admin_footer_copyright.php');?>   
            


        </div>
        <!-- END wrapper -->
    
 <?php include(app_path().'/includes/admin/admin_footer.php');?>