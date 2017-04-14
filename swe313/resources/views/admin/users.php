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
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Reg date</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>

<?php
foreach ($users as $user){
  $id=$user->id;
  $name=$user->name;
  $email=$user->email;
  $type=$user->type;
  $create=$user->created_at;
?>
<tr>
<td><?php echo $id;?></td>
<td><?php echo $name;?></td>
<td><?php echo $email;?></td>
<td><?php echo ($type==1 ?'Admin' : 'User');?></td>
<td><?php echo $create;?></td>
</tr>

<?php 
} 
?>
                                                        

                                                    </tbody>
                                                </table>

<div class="col-sm-6"><div id="datatable_paginate" class="dataTables_paginate paging_simple_numbers">

<?php
  if ($users->hasMorePages()) {
echo '<a href="'.$users->nextPageUrl().'" class="next" id="next" ><button type="button" class="btn btn-warning waves-effect waves-light w-lg m-b-5">Next page</button></a>';


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