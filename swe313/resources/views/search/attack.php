<?php include(app_path().'/includes/site_header.php');?>
<?php include(app_path().'/includes/site_header_menu.php');?>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Domain-Host offers</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->             
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">24 Hour Services</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">VPS Service</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Web Design</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Web Development</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Hosting Spaces</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Secure Server</a></h4>
                                </div>
                            </div>

                        </div><!--/category-products-->
                    
                    </div>
                </div>
                <!-- end sidebar -->

                <div class="col-sm-9">
                    <div class="blog-post-area">
                        <h2 class="title text-center">Malicious Payload Detected!!.You are under Surveillance.</h2>

<?php
foreach ($tests as $test){
  $id=$test->id;
  $testname=$test->pname;
  $price=$test->price;

 if ($test->img=="") {
   $img=url()."/images/product01.jpg";
 }
 else {
     $img=url()."/uploads/".$test->img;
 }
?>


<div class="col-sm-4 column productbox">
    <img src="<?php echo $img;?>" class="img-responsive" style="height: 236px; width: 262px;">
    <div class="producttitle"><a href="<?php echo url('test/'.$id);?>"><?php echo $testname;?></a></div>
    <div class="productprice"><div class="pull-right">
     <a href="<?php echo url('test/'.$id);?>" 


<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
<input type="hidden" name="test_id" value="<?php echo $id;?>">
<input type="hidden" name="quantity" value="1">
</form>














    </div>
    <div class="pricetext">$<?php echo $price;?></div></div>
</div>















<?php 
} 
?>
                    </div><!--/blog-post-area-->
                </div>  
            </div>
        </div>
    </section>
<?php include(app_path().'/includes/site_footer.php');?>