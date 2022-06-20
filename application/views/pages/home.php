<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home-styles.css')?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
                        <li><a href="<?php echo base_url('Show_Events/view/'.$data['id'].'/'); ?>"><?php echo $data['event_name']; ?></a></li>
                        <label><?php echo $data['event_description']; ?></label><br>
                        <label><?php echo $data['event_date'] ?></label>
                </div>
                <?php if (++$i == 4) break; ?>
                <?php endforeach; ?>    
                
            </div>
            <img src="<?php echo base_url('/assets/images/girl_with_megaphone.png')?>" >
        </ul>
    </nav>

    <!-- This is where the google map will be shown -->
    <div id="map" style="height: 1200px; width:1200px;"></div>

    <!-- Add Modal -->
    <div class="modal fade" id="the-modal-example">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Select an action:</h4><button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body justify-content-center">
                <button type="button" id="create-event-button" class="btn btn-danger" data-bs-dismiss="modal">Create Event</button>
                <button type="button" id="create-hotspot-button" class="btn btn-danger justify-content-end" data-bs-dismiss="modal">Add Disease Hotspot</button>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>


<script>
    var isLoggedin = '<?php echo isset($_SESSION['user']) ?>';
    // var info = document.getElementById("info"); // this will select the current div  with id = info
    // var ServiceId = document.getElementById("ServiceId"); // this will select the input with id = ServiceId
    // var prov = document.getElementById("ProviderId"); // this will select the input with id = ProviderId
    var map; // map variable
    var lat;
    var lng;
    var mapOptions = {
        zoom: 15,
        center: {lat:14.6998004, lng:121.0630183},
        draggableCursor: 'pointer',
    }; // map options
    

    // this will initiate when load the page and have all
    function initialize() {
        // set the map to the div with id = map and set the mapOptions as defualt
        map = new google.maps.Map(document.getElementById('map'),
            mapOptions);

        // var infoWindow = new google.maps.InfoWindow({map: map});
        
        if(isLoggedin == '1'){
            google.maps.event.addListener(map, "click", function(event) {
                lat = event.latLng.lat();
                lng = event.latLng.lng();

                $("#the-modal-example").modal('show');
                
                // window.location.href = "<?php //echo base_url('create-event')?>"+"/" +lat+"/" +lng;
            });

        }

        // Getting all of the events
        GetEventLocations();
        GetHotspotLocations();
        
    }

    
    // Function to get all the events in the database via AJAX request.
    function GetEventLocations(){
        $.ajax({
            url : "<?php echo base_url();?>create_events/get_events",
            type : "GET",
            dataType: 'json',
            success:function(data){
                // console.log(data);
                AddMarkers(data);
            }
        });
    }

    function GetHotspotLocations(){
        $.ajax({
            url : "<?php echo base_url();?>hotspots/get_hotspots",
            type : "GET",
            dataType: 'json',
            success:function(data){
                console.log(data);
                AddHotspots(data);
            }
        });
    }


    // Function to be called for placing all of the markers on the map
    function AddMarkers(data_arg){
        var marker, i;
        //Create and open InfoWindow.
        var infoWindow = new google.maps.InfoWindow();

        for (i = 0; i < data_arg.length; i++) {
            var event_coord_var = new google.maps.LatLng(data_arg[i]['event_lat'], data_arg[i]['event_lng']);
            // Guys kung gusto nyo malaman read here: https://developers.google.com/maps/documentation/javascript/markers
            marker = new google.maps.Marker({
                position: event_coord_var,
                map: map,
                title: data_arg[i]['event_name'],
            });

            //Attach click event to the marker. READ MORE HERE: https://www.aspsnippets.com/Articles/Google-Maps-API-V3-Add-multiple-markers-with-InfoWindow-to-Google-Map.aspx
            (function (marker, data2_arg) {
                var date_var = new Intl.DateTimeFormat('en', { dateStyle: "long", timeStyle: "medium" }).format(new Date(data2_arg['event_date']))
                var content_var = "<div style = 'width:200px;min-height:40px'> <h5>"+ data2_arg['event_name'] + "</h5>" + data2_arg['event_description'] + "<br><br><label><strong>" + date_var +"</label></strong>"+"</div>";

                google.maps.event.addListener(marker, "click", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow.setContent(content_var);
                    infoWindow.open(map, marker);
                });
            })(marker, data_arg[i]);
        }
    }


    function AddHotspots(data_arg){
        
        for (i = 0; i < data_arg.length; i++) {
            var hotspot_coord_var = new google.maps.LatLng(data_arg[i]['lat'], data_arg[i]['lng']);
            var infoWindow = new google.maps.InfoWindow();
            
            var cityCircle = new google.maps.Circle({
                strokeColor: "#FF0000",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#FF0000",
                fillOpacity: 0.35,
                map,
                center: hotspot_coord_var,
                radius: Number(data_arg[i]['radius']),
            });

            (function (circle, data2_arg, hotspot_coord_arg) {
                var content_var = "<div style = 'width:200px;min-height:40px'> <h5>"+ data2_arg['name'] + "</h5>" + data2_arg['description'] + "<br><br><label><strong>" + data2_arg['infected'] +" Infected </label></strong>"+"</div>";

                google.maps.event.addListener(circle, "click", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow.setContent(content_var);
                    infoWindow.setPosition(hotspot_coord_arg);
                    infoWindow.open(map, circle);
                    console.log("NICE1");
                });

                google.maps.event.addListener(map, "rightclick", function (e) {
                    circle.setVisible(!circle.getVisible());
                });
            })(cityCircle, data_arg[i], hotspot_coord_var);
            // cityCircle.setClickable(false);
        }
    }

    document.getElementById("create-event-button").onclick = function () {
        window.location.href = "<?php echo base_url('create-event')?>"+"/" +lat+"/" +lng;
    };

    document.getElementById("create-hotspot-button").onclick = function () {
        window.location.href = "<?php echo base_url('create-hotspot')?>"+"/" +lat+"/" +lng;
    };

</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=<?php echo env('GOOGLE_MAPS_KEY')?>&libraries=places&callback=initialize">
    google.maps.event.addDomListener(window, 'load', initialize);
</script>