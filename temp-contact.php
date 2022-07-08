<?php
/**
 * Template Name: Contact 
 */

get_header();


$address = get_field('address');
?>
    <?php get_template_part('template-parts/banner')?>
    <div class="primrose-hill">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="padding">
              <div class="welcome-text">
                <h1><?php echo get_post_meta( get_the_ID(), 'heading',  true ); ?></h1>
              </div>
            </div>
          </div>
          <div class="col-md-6">
          <div class="padding">
              <div class="para">
                <p><?php echo get_post_meta( get_the_ID(), 'short_info',  true ); ?></p>
              </div>
              <div class="time-class">
                <button class="btn btn-buy"><a href="<?php echo get_post_meta( get_the_ID(), 'time_tab',  true ); ?>">TIMETABLES</a></button>
                <button class="btn btn-buy"><a href="<?php echo get_post_meta( get_the_ID(), 'classes_url',  true ); ?>">CLASSES</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="address">
      <div class="container">
        <div class="find-us">
          <div class="padding">
            <div class="text-left">
              <h2>PRIMROSE HILL</h2>
            </div>
          </div>
        </div>
        <div class="address-map">
          <div class="row">
            <div class="col-md-6">
              <div class="padding">
                <div class="heading">
                  <h3>Address</h3>
                  <p><?php echo $address['address']; ?></p>
                  
                </div>
                <div class="heading mt-4">
                  <h3>NEAREST TUBE</h3>
                  <p><?php echo $address['nearest_tube']; ?></p>
                </div>
                <div class="heading mt-4">
                  <h3>CONTACT</h3>
                  <p><a href="tel:+44 (0)207 186 0611"><?php echo $address['contact']; ?></a></p>
                  <p><a href="mailto:info@exhalepilateslondon.com"><?php echo $address['mail']; ?></a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="padding" style="width:420px;height:420px;">
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDb1srLKF_h7m9FvC97AgtFoQWc3aaAKHM"></script>                
                  <div id="map_canvas" class="map" style="width:420px; height:420px;"> </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="address">
      <div class="container">
        <div class="find-us">
          <div class="padding">
            <div class="text-left">
              <h2>NORTH FINCHLEY</h2>
            </div>
          </div>
        </div>
        <div class="address-map">
          <div class="row">
            <div class="col-md-6">
              <div class="padding">
                <div class="heading">
                  <h3>Address</h3>
                  <p><?php echo $address['address']; ?></p>
                  
                </div>
                <div class="heading mt-4">
                  <h3>NEAREST TUBE</h3>
                  <p><?php echo $address['nearest_tube']; ?></p>
                </div>
                <div class="heading mt-4">
                  <h3>CONTACT</h3>
                  <p><a href="tel:+44 (0)207 186 0611"><?php echo $address['contact']; ?></a></p>
                  <p><a href="mailto:info@exhalepilateslondon.com"><?php echo $address['mail']; ?></a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="padding" style="width:420px;height:420px;">
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDb1srLKF_h7m9FvC97AgtFoQWc3aaAKHM"></script>                
                  <div id="map_canvas" class="map" style="width:420px; height:420px;"> </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  
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

<script>

function initMap() {
  var latlng = new google.maps.LatLng(51.5415606,-0.1553629);
  // State custom styles

  var styles = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#111111"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#181818"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1b1b1b"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#2c2c2c"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8a8a8a"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#373737"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#3c3c3c"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#4e4e4e"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#000000"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#3d3d3d"
      }
    ]
  }
]

  var myOptions = {
    zoom: 17,
    center: latlng,
    styles: styles

    // mapTypeId: google.maps.MapTypeId.featureOpts
  };


  var map = new google.maps.Map(
    document.getElementById("map_canvas"),
    myOptions
  );

  var myMarker = new google.maps.Marker({
    position: latlng,
    map: map,
    title: "Exhale Pilates London",
    backgroundColor: 'hsla(0, 0%, 0%, 0)',
  });



  google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center);
  });
}

google.maps.event.addDomListener(window, "load", initMap);

</script>


<?php

get_footer();
