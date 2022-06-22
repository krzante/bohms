
<body onload="colorChange()">  

    <form method="POST" class="form bg mt-5" action="<?php echo base_url('hotspot/update/').$id; ?>">
        <div class="box mt-5">
            <div class="mb-3">
                <h1><b>EDIT HOTSPOT<b></h1>
               <img src="<?php echo base_url('/assets/images/Bohmsv1.png')?>" width="100" height="100">
            </div>
            
            <!-- Name -->
            <div class="mb-3">
                <input required type="text" class="form-control" name="hotspot-name" placeholder="Name" value="<?php echo $name?>">
            </div>
            
            <!-- Description -->
            <div class="mb-3 input-group">
                <input required type="text" class="p-5 form-control" name="hotspot-description" placeholder="Description" value="<?php echo $description?>">
            </div>

            <!-- Infected -->
            <div class="mb-3 input-group">
                <input required type="number" class="form-control" name="hotspot-infected" id="hotspot-infected" placeholder="Number of Infected" value="<?php echo $infected?>" min="0" step="1" pattern="^\d+(?:\.\d{1,2})?$">
            </div>

            <!-- Radius -->
            <div class="mb-3 input-group">
                <input required type="number" class="form-control" name="hotspot-radius" id="hotspot-radius" placeholder="0.0 meters" value="<?php echo $radius?>" min="0" step="0.01" pattern="^\d+(?:\.\d{1,2})?$">
            </div>

            <!-- Color  -->
            <div class="mb-3 input-group">
                <!-- <input required type="number" class="form-control" name="hotspot-color" id="hotspot-color" placeholder="color placeholder" min="0" step="0.01" pattern="^\d+(?:\.\d{1,2})?$"> -->
                <select required name="hotspot-color" id="hotspot-color">
                    <option value="#333331">Light Warning</option>
                    <option value="#FF8000">Moderate Warning</option>
                    <option value="#FF0000">Critical Warning</option>
                </select>
            </div>
            
            <!-- Preview Button -->
            <div class="mb-3 input-group">
                <!-- <input type="text" class="form-control" placeholder="Event Location" name="event_location"> -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-custom" name="Set" onclick="setCircle()">Preview Area</button>
            </div>

            <?php echo validation_errors(); ?>

            <div class="mb-3">
                <button type="submit" class="btn btn-custom" name="Create" >UPDATE</button>
                <img src="<?php echo base_url('/assets/images/create_event.png')?>" width="138" height="130" >
            </div>
        </div>
    </form>


    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hotspot Preview</h4><button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="map" style="height: 450px; width:100%;"></div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>


    <script>
    var isLoggedin = '<?php echo isset($_SESSION['user']) ?>';

    var map; // map variable
    var lat;
    var lng;
    var mapOptions = {
        zoom: 18,
        center: {lat:<?php echo (float)$lat?>, lng:<?php echo (float)$lng?>},
        draggableCursor: 'pointer',
    }; // map options
    let cityCircle;
    var infoWindow;

    // this will initiate when load the page and have all
    function initialize() {
        // set the map to the div with id = map and set the mapOptions as defualt
        map = new google.maps.Map(document.getElementById('map'),
            mapOptions);
        
        // Initializing Preview Information Window
        infoWindow = new google.maps.InfoWindow({
            content: "<div style = 'width:200px;min-height:40px'> <h5>"+ "Disease Name" + "</h5>" + "Disease Description" + "<br><br><label><strong>" + "X Residents Infected" +"</label></strong>"+"</div>",
            maxWidth: 500
        });
        // initCircle();
    }


    function setCircle(){
        var radius = document.getElementById("hotspot-radius").value;
        var hotspot_color = document.getElementById("hotspot-color").value
        
        cityCircle = new google.maps.Circle({
            strokeColor: hotspot_color,
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: hotspot_color,
            fillOpacity: 0.35,
            map,
            center: mapOptions.center,
            radius: Number(radius),
        });
        
        google.maps.event.addListener(cityCircle, 'click', function(ev) {
            infoWindow.setPosition(mapOptions.center);
            infoWindow.open(map);
        });
    }

    
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $('#myModal').on('hide.bs.modal', function () {
        console.log("cleared");
        cityCircle.setMap(null);
    });

    function colorChange(){
        const $select = document.querySelector('#hotspot-color');
        $select.value = "<?php echo $color ?>";
    }
</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=<?php echo env('GOOGLE_MAPS_KEY')?>&libraries=places&callback=initialize">
    google.maps.event.addDomListener(window, 'load', initialize);
</script>