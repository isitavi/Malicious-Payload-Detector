<?php include(app_path().'/includes/admin/admin_header.php');?>
<?php include(app_path().'/includes/admin/admin_header_menu.php');?>
 <!-- Top Bar End -->

 <!-- ========== Left Sidebar Start ========== -->
 <?php include(app_path().'/includes/admin/admin_left_menu.php');?>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">














 <!-- Left Sidebar End --> 
    @yield('content')


</div></div>
</div>






            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

  <?php include(app_path().'/includes/admin/admin_footer_copyright.php');?>   
            


        </div>
        <!-- END wrapper -->
    
 <?php include(app_path().'/includes/admin/admin_footer.php');?>

