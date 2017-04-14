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
                                <h4 class="pull-left page-title">Datatable</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Datatable</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Datatable</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>IP Address</th>
                                                            <th>Payload</th>
                                                            <th>Browser</th>
                                                            <th>Create</th>
                                                        </tr>
                                                    </thead>
                    
                                                    <tbody>

<?php
foreach ($useractivity as $userinput){
  $id=$userinput->id;
  $ip=$userinput->ip;
  $malicious_payload=$userinput->malicious_payload;
  $browser=$userinput->browser;
  $create=$userinput->created_at;
?>
<tr>
<td><?php echo $id;?></td>
<td><?php echo $ip;?></td>
<td><?php echo $malicious_payload;?></td>
<td><?php echo $browser;?></td>
<td><?php echo $create;?></td>
</tr>

<?php 
} 
?>
                                                        

                                                    </tbody>
                                                </table>

<div class="col-sm-6"><div id="datatable_paginate" class="dataTables_paginate paging_simple_numbers">

<?php
  if ($useractivity->hasMorePages()) {
echo '<a href="'.$useractivity->nextPageUrl().'" class="next" id="next" ><button type="button" class="btn btn-warning waves-effect waves-light w-lg m-b-5">Next page</button></a>';


}
?>



</div></div>






                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
       
      

                        </div> <!-- End Row -->


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