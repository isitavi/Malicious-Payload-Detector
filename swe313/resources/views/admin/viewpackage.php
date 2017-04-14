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
<th>Id</th>
<th>Image</th>
<th>Name</th>
<th>price</th>
<th>Description</th>
<th>Action</th>

</tr>
  </thead>

                                             
<tbody>

<?php
foreach ($tests as $test){
  $id=$test->id;
  $testname=$test->pname;
  $price=$test->price;
  $des=$test->des;
  $short_des = (strlen($des) > 100) ? substr($des,0,100) : $des;
 if ($test->img=="") {
   $img=url()."/images/product01.jpg";
 }
 else {
     $img=url()."/uploads/".$test->img;
 }
?>
<tr>
<td><?php echo $id;?></td>

<td><img src="<?php echo $img;?>" class="img-responsive" style="height:80px; width:80px;"></td>
<td><?php echo $testname;?></td>
<td><?php echo $price;?></td>
<td class="col-md-4">



 <div class="panel-group">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse<?php echo $id;?>">view full</a>
      </h4>
    </div>


    <div id="collapse<?php echo $id;?>" class="panel-collapse collapse">
      <div class="panel-body">  <?php echo $des;?></div>

    </div>

  </div>
</div>


</td>
<td class="col-md-3">


  <a href="<?php echo url('test/'.$id);?>" target="_blank">
<button class="btn btn-warning waves-effect waves-light m-b-5">
 <i class="fa fa-eye"></i>
  <span>view</span> </button>
  </a>


<a href="<?php echo url('admin/vieworder/'.$id);?>">
<button class="btn btn-warning waves-effect waves-light m-b-5">
 <i class="fa fa-eye"></i>
  <span>Upadte</span> </button>
  </a>




<form style="display:inline-block;" class="form-horizontal" role="form" action="<?php echo url('admin/dltpackage');?>" method="POST" id="processdlt1">

<input type="hidden"  name="_token"    value="<?php echo csrf_token();?>">                               

<input type="hidden" name="id" value="<?php echo $id;?>">

    



</button>


</form>

   



</td>

</tr>

<?php 
} 
?>
                                                        

                                                    </tbody>
                                                </table>

<div class="col-sm-6"><div id="datatable_paginate" class="dataTables_paginate paging_simple_numbers">

<?php
  if ($tests->hasMorePages()) {
echo '<a href="'.$tests->nextPageUrl().'" class="next" id="next" ><button type="button" class="btn btn-warning waves-effect waves-light w-lg m-b-5">Next page</button></a>';


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