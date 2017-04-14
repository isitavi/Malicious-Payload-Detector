<html>
<body>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="frm1" id="paypal">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="m.shojol80@gmail.com">
<input type="hidden" name="currency_code" value="US">
<?php
$i=1;
foreach ($all as $product) { 


$id=$product['id'];
$name=$product['name'];
$price=$product['price'];
$quantity=$product['quantity'];

  echo '<input type="hidden" name="item_name_'.$i.'" value="'.$name.'">';
  echo '<input type="hidden" name="item_number_'.$i.'" value="'.$id.'">';
  echo '<input type="hidden" name="amount_'.$i.'" value="'.$price.'">';
  echo '<input type="hidden" name="quantity_'.$i.'" value="'.$quantity.'">';

 $i++;


}
?>
<input type="submit" value="redirecting....click here if you don't redirect automatically">
</form>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
   // window.document.forms[0].submit();
  });
</script>

</body>
</html>