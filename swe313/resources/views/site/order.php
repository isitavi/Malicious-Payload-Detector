<?php include(app_path().'/includes/site_header.php');?>
<?php include(app_path().'/includes/site_header_menu.php');?>		
<?php
$id=$test_details[0]->id;
$name=$test_details[0]->pname;
$price=$test_details[0]->price;
 if ($test_details[0]->img=="") {
   $img=url()."/images/product01.jpg";
 }
 else {
 	 $img=url()."/uploads/".$test_details[0]->img;
 }
?>

<?php

$items = Cart::getContent();

?>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="review-payment">
				<h2>Review &amp; Test</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
						

							<td></td>
						</tr>
					</thead>
					<tbody>





<?php
foreach($items as $item)
{
    $item->id; // the Id of the item
    $item->name; // the name
    $item->price; // the single price without conditions applied
    $item->getPriceSum(); // the subtotal without conditions applied
    $item->getPriceWithConditions(); // the single price with conditions applied
    $item->getPriceSumWithConditions(); // the subtotal with conditions applied
    $item->quantity; // the quantity
    $item->attributes; // the attributes
?>

						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo $img;?>" alt="" style="width:110px;"></a>
							</td>
							<td class="cart_description">
		<h4><a href=""><?php echo $name;?></a></h4>
								
							</td>
							<td class="cart_price">
								<p>$<?php echo $price;?></p>
							</td>

						</tr>




<?php
}

?>




	<td>

<form action="<?php echo url();?>/placeorder" method="POST" enctype="multipart/form-data" name="create" id="user_update">


<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
<input type="hidden" name="test_id" value="<?php echo $id;?>">

<button type="type" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
</button>
</form>


	</td>					

					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section>
	

<?php include(app_path().'/includes/site_footer.php');?>
	
