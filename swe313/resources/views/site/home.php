<?php include(app_path().'/includes/site_header.php');?>
<?php include(app_path().'/includes/site_header_menu.php');?>
<?php include(app_path().'/includes/home_slider.php');?>


	
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
						</div><!--/category-products-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">

					<div class="welcome-message">

						<h2>Welcome To DOMAIN-HOST</h2>

						<p>That’s why it’s working with MSO and some others popular international IT organizations to establish a digital environment in BD by developing websites, providing essential software's etc. It’s office automation service is also very famous in nationwide. Though they have started their journey with four IT experts in 2014 now they have more than seventeen IT experts in various working sector. Our office is open from saturday to thursday. Friday is only our holiday. But you can also order on friday and out of office hour. Our support member will help you to register your domain and activate your hosting account and other services instantly.</p>
						<p> If you pay through paypal, your service will be activated automatically. Call our customer care number from 10a.m. to 10p.m for any sales related and technical support. It’s office automation service is also very famous in nationwide. Though they have started their journey with four IT experts in 2014 now they have more than seventeen IT experts in various working sector. It’s office automation service is also very famous in nationwide. Though they have started their journey with four IT experts in 2014 now they have more than seventeen IT experts in various working sector. <br> 
						 If you pay through paypal, your service will be activated automatically. Call our customer care number from 10a.m. to 10p.m for any sales related and technical support. It’s office automation service is also very famous in nationwide.
						</p>

					</div>

					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">All Packages</h2>

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
     <a href="<?php echo url('test/'.$id);?>" class="btn btn-danger btn-sm" role="button">View</a>



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

					</div><!--features_items-->






				
				</div>
			</div>
		</div>
	</section>
<?php include(app_path().'/includes/site_footer.php');?>
	
	