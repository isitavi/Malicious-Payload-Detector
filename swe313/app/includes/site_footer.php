<div class="loading-cart" style="display: none;">Loading&#8230;</div>

<footer id="footer"><!--Footer-->
        <div class="footer-top">
         
        </div>

        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2015 DOMAIN-HOST All rights reserved.</p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    
<section class="disclaimer">
    <div class="container">
    <div class="row">
<div class="col-sm-2">
<h3>Disclaimer :</h3>
</div>

<div class="col-sm-10">
<marquee id="scroll_news">
<div onmouseout="document.getElementById('scroll_news').start();" onmouseover="document.getElementById('scroll_news').stop();">
<h4>DOMAIN-HOST is the owner of this website and rights holder of the intellectual property of that page and all contents thereof and www.domainhosting.com domain name.</h4>
</div></marquee>

</div>


</div>
    </div>
</section>





  
    <script src="<?php echo url();?>/js/jquery.js"></script>
    <script src="<?php echo url();?>/js/bootstrap.min.js"></script>
    <script src="<?php echo url();?>/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo url();?>/js/price-range.js"></script>
    <script src="<?php echo url();?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo url();?>/js/main.js"></script>
    <script src="<?php echo url();?>/myjs/upload.js"></script>
    <script src="<?php echo url();?>/myjs/event.js"></script>


    <!-- Google Maps API V3 -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&sensor=false"></script>
    
    <!-- Activ'Map plugin -->
    <link rel="stylesheet" href="<?php echo url();?>/jquery-activmap/css/jquery-activmap.css">
    <script src="<?php echo url();?>/jquery-activmap/js/jquery-activmap.js"></script>
    <script src="<?php echo url();?>/jquery-activmap/js/markercluster.min.js"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


  <script src="<?php echo url();?>/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo url();?>/dist/sweetalert.css">


<style>
.disclaimer {
    background: #00beef none repeat scroll 0 0;
    width: 100%;
}
.disclaimer h3 {
    color: #fff;
    font-family: Roboto-Regular;
    font-size: 25px;
    margin: 0;
    padding: 20px 0;
}
.disclaimer h4 {
    color: #fff;
    font-family: Roboto-Regular;
    font-size: 18px;
    margin: 0;
    padding: 20px 0;
}
</style>




    <script>
$(document).ready(function () {
    var loc = window.location.href;
    var url="";

    $("ul a").each(function() {
      url=$(this).attr('href');

      //alert("loc="+loc+"url="+url);
        if (loc ==url || loc== url+"/" ) {
            $(this).addClass("active");
        }
    });
});
    </script>



</body>
</html>