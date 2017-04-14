<?php include(app_path().'/includes/site_header.php');?>
<?php include(app_path().'/includes/site_header_menu.php');?>


	
	<section>

<div class="container">
    <div class="row">







        <div class="col-md-3">
         
            
            <a id="activmap-reset" class="btn btn-default" href="#"><i class="fa fa-ban"></i> Reset</a>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-location-arrow"></i></div>
                    <input id="activmap-location" type="text" class="form-control" name="location" value="" placeholder="Location...">
                </div>
                <p>
                    Radius: 
                    <input type="radio" name="activmap_radius" value="0"> None
                    <input type="radio" name="activmap_radius" value="3"> 3 km
                    <input type="radio" name="activmap_radius" value="20"> 20 km
                    <input type="radio" name="activmap_radius" value="50"> 50 km
                    <input type="radio" name="activmap_radius" value="100"> 100 km
                </p>
            </div>
            
            <a id="activmap-geolocate" class="btn btn-default" href="#"><i class="fa fa-crosshairs"></i> Geolocate</a>

            <!-- Activ'Map categories and tags -->
            <div class="panel-group" id="activmap-accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse-services">
                                <i class="fa fa-bank"></i> Services &amp; Equipments
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-services" class="panel-collapse collapse in">
                        <div class="panel-body">

                          <input type="checkbox" name="marker_type[]" value="all" checked > All<br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div id="activmap-wrapper">
                <!-- Places panel (auto removable) -->
                <div id="activmap-places" class="hidden-xs">
                    <div id="activmap-results-num"></div>
                </div>
                <!-- Map wrapper -->
                <div id="activmap-canvas"></div>
            </div>  
        </div>  
    </div>         
</div>
	</section>
<?php include(app_path().'/includes/site_footer.php');?>
    <script>
        $(function(){
            //Activ'Map plugin init
            $('#activmap-wrapper').activmap({
                places: [



<?php 

foreach ($location as $key => $value) {

?>
 {title: '<?php echo $value->title;?>', address: '<?php echo $value->address;?>', url: '<?php echo $value->phone;?>', tags: ['all'], lat: <?php echo $value->lat;?>, lng: <?php echo $value->lan;?>, img: 'images/thumb.png', icon: 'images/icons/marker-hotel.png'},

<?php

}

?>],
icon: 'jquery-activmap/img/marker.png',
                posPanel: 'left',
                showPanel: true,
                //radius: 20,
                cluster: false,
                                mapType: 'roadmap',
//autogeolocate:true,
            }); 
        });
    </script>