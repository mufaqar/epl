<?php
/**
 * Template Name: Contact 
 */
  get_header();
  $address = get_field('address');
  ?>
    <?php get_template_part('template-parts/banner');?>
    <?php
        if( have_rows('location_address') ): while ( have_rows('location_address') ) : the_row(); 

            if( have_rows('address') ): while ( have_rows('address') ) : the_row();    
            
            $index = get_row_index();

                
                $title =  get_sub_field('title');
                $address =  get_sub_field('address');
                $nearest_tube =  get_sub_field('nearest_tube'); 
                $phone =  get_sub_field('phone');
                $mail =  get_sub_field('mail');
                $lat_lon =  get_sub_field('lat_lon');

                ?>

<div class="address">
      <div class="container">
        <div class="find-us">
          <div class="padding">
            <div class="text-left">
              <h2><?php echo $title ?></h2>
            </div>
          </div>
        </div>
        <div class="address-map">
          <div class="row">
            <div class="col-md-6">
              <div class="padding">
                <div class="heading">
                  <h3>Address</h3>
                  <p><?php echo $address ?></p>
                  
                </div>
                <div class="heading mt-4">
                  <h3>NEAREST TUBE</h3>
                  <p><?php echo $nearest_tube; ?></p>
                </div>
                <div class="heading mt-4">
                  <h3>CONTACT</h3>
                  <p><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
                  <p><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="padding" style="width:420px;height:420px;">

              <iframe src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyB7P2JUBT6sUZFCdSKobiv9e7XhE8BU1Jo&center=51.5415606,-0.1553629&zoom=12&format=png&maptype=roadmap&style=element:geometry%7Ccolor:0x1d2c4d&style=element:labels.text.fill%7Ccolor:0x8ec3b9&style=element:labels.text.stroke%7Ccolor:0x1a3646&style=feature:administrative.country%7Celement:geometry.stroke%7Ccolor:0x4b6878&style=feature:administrative.land_parcel%7Celement:labels.text.fill%7Ccolor:0x64779e&style=feature:administrative.province%7Celement:geometry.stroke%7Ccolor:0x4b6878&style=feature:landscape.man_made%7Celement:geometry.stroke%7Ccolor:0x334e87&style=feature:landscape.natural%7Celement:geometry%7Ccolor:0x023e58&style=feature:poi%7Celement:geometry%7Ccolor:0x283d6a&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0x6f9ba5&style=feature:poi%7Celement:labels.text.stroke%7Ccolor:0x1d2c4d&style=feature:poi.park%7Celement:geometry.fill%7Ccolor:0x023e58&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x3C7680&style=feature:road%7Celement:geometry%7Ccolor:0x304a7d&style=feature:road%7Celement:labels.text.fill%7Ccolor:0x98a5be&style=feature:road%7Celement:labels.text.stroke%7Ccolor:0x1d2c4d&style=feature:road.highway%7Celement:geometry%7Ccolor:0x2c6675&style=feature:road.highway%7Celement:geometry.stroke%7Ccolor:0x255763&style=feature:road.highway%7Celement:labels.text.fill%7Ccolor:0xb0d5ce&style=feature:road.highway%7Celement:labels.text.stroke%7Ccolor:0x023e58&style=feature:transit%7Celement:labels.text.fill%7Ccolor:0x98a5be&style=feature:transit%7Celement:labels.text.stroke%7Ccolor:0x1d2c4d&style=feature:transit.line%7Celement:geometry.fill%7Ccolor:0x283d6a&style=feature:transit.station%7Celement:geometry%7Ccolor:0x3a4762&style=feature:water%7Celement:geometry%7Ccolor:0x0e1626&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x4e6d70&size=480x360"
                width="600" height="360"> </iframe>

           

             <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDb1srLKF_h7m9FvC97AgtFoQWc3aaAKHM"></script>  
                <script>
                    function initMap() {
                      var latlng = new google.maps.LatLng(<?php echo $lat_lon ?>);
                      // State custom styles

                              var styles = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8ec3b9"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1a3646"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#4b6878"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#64779e"
      }
    ]
  },
  {
    "featureType": "administrative.province",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#4b6878"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#334e87"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#023e58"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#283d6a"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#6f9ba5"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#023e58"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#3C7680"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#304a7d"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#98a5be"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#2c6675"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#255763"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#b0d5ce"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#023e58"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#98a5be"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#283d6a"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#3a4762"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#0e1626"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#4e6d70"
      }
    ]
  }
]

                          var myOptions = {
                            zoom: 13,
                            center: latlng,
                            styles: styles

                            // mapTypeId: google.maps.MapTypeId.featureOpts
                          };


                          var map = new google.maps.Map(
                            document.getElementById("map_canvas_<?php echo $index?>"),
                            myOptions
                          );

                          var myMarker = new google.maps.Marker({
                            position: latlng,
                            map: map,
                            title: "<?php echo $title?>",
                            backgroundColor: 'none'
                          });



                          google.maps.event.addDomListener(window, "resize", function() {
                            var center = map.getCenter();
                            google.maps.event.trigger(map, "resize");
                            map.setCenter(center);
                          });
                    }

                    google.maps.event.addDomListener(window, "load", initMap);

                    </script>
                
                
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

        <?php

    endwhile; endif;

endwhile; endif;

?>
   

   

  
<style>



.container {
  
}

.map{
    height: 0;
    overflow: hidden;
    padding-bottom: 100%;
    position: relative;
}

</style>






<?php

get_footer();
