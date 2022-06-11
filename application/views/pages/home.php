<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home-styles.css')?>">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    

    <title>Admin Dashboard</title>
</head>

<body>
    <nav>
        <ul>
            <h4 >Barangay</h4>
            <h5 >Announcements</h5>
            <div class="annoucements">
                <?php $i = 0;
                 foreach($baranggay_event as $data) : ?>
                <div class="event-card">
                        <li><a href="#"><?php echo $data['event_name']; ?></a></li>
                        <label><?php echo $data['event_description']; ?></label><br>
                        <label><?php echo $data['event_date'] ?></label>
                </div>
                <?php if (++$i == 4) break; ?>
                <?php endforeach; ?>    
                
            </div>
            <img src="<?php echo base_url('/assets/images/girl_with_megaphone.png')?>" >
        </ul>
    </nav>
    <div id="map" style="height: 1200px; width:1200px;"></div>
    <!-- <img class="google-maps-img" src="<?php echo base_url('/assets/images/google_maps_placeholder.png') ?>">  -->

    <div class="modal fade" id="the-modal-example">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Please Read Below 👇</h4><button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Information here
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Save yourself from this pain!</button>
            </div>
            </div>
        </div>
    </div>


<script>
    let events;
    var isLoggedin = '<?php echo isset($_SESSION['user']) ?>';
    var lat = document.getElementById("lat"); // this will select the input with id = lat
    var lng = document.getElementById("lng"); // this will select the input with id = lng
    var info = document.getElementById("info"); // this will select the current div  with id = info
    var ServiceId = document.getElementById("ServiceId"); // this will select the input with id = ServiceId
    var prov = document.getElementById("ProviderId"); // this will select the input with id = ProviderId
    var locations = [];
    var km = 30; // this kilometers used to specify circle wide when use drawcircle function
    var Crcl ; // circle variable
    var map; // map variable
    var mapOptions = {
        zoom: 15,
        
        center: {lat:14.6998004, lng:121.0630183}
    }; // map options
    var markers = []; // markers array ,we will fill it dynamically
    var infoWindow = new google.maps.InfoWindow(); // information window ,we will use for our location and for markers
    
    // this will initiate when load the page and have all
    function initialize() {
        // set the map to the div with id = map and set the mapOptions as defualt
        map = new google.maps.Map(document.getElementById('map'),
            mapOptions);

        var infoWindow = new google.maps.InfoWindow({map: map});

        // get current location with HTML5 geolocation API.
        // if (navigator.geolocation) {
        //     navigator.geolocation.getCurrentPosition(function(position) {
        //         var pos = {
        //             lat: position.coords.latitude,
        //             lng: position.coords.longitude
        //         };
        //         lat.value  =  position.coords.latitude ;
        //         lng.value  =  position.coords.longitude;
        //         info.nodeValue =  position.coords.longitude;
        //         // set the current posation to the map and create info window with (Here Is Your Location) sentense
        //         infoWindow.setPosition(pos);
        //         infoWindow.setContent('Here Is Your Location.');
        //         // set this info window in the center of the map
        //         map.setCenter(pos);
        //         // draw circle on the map with parameters
        //         // DrowCircle(mapOptions, map, pos, km);

        //     }, function() {
        //         // if user block the geolocatoon API and denied detect his location
        //         handleLocationError(true, infoWindow, map.getCenter());
        //     });
        // } else {
        //     // Browser doesn't support Geolocation
        //     handleLocationError(false, infoWindow, map.getCenter());
        // }
        
        if(isLoggedin == '1'){
            google.maps.event.addListener(map, "rightclick", function(event) {
                var lat = event.latLng.lat();
                var lng = event.latLng.lng();

                window.location.href = "<?php echo base_url('create-event')?>"+"/" +lat+"/" +lng;
            });
        }

        GetEventLocations();
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=<?php echo env('GOOGLE_MAPS_KEY')?>&libraries=places&callback=initialize">
</script>