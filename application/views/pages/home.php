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
            <div class="annoucements" style="overflow-y: auto; height: 100%; max-height: 65vh">
            <img src="<?php echo base_url('/assets/images/girl_with_megaphone.png')?>" style="position: absolute; z-index: -1; margin-top: 10rem">
                <?php $i = 0;
                 foreach($baranggay_event as $data) : ?>
                <div class="event-card" >
                        <li><a href="<?php echo base_url('Show_Events/view/'.$data['id'].'/'); ?>"><?php echo mb_strimwidth($data['event_name'], 0, 25, "..."); ?></a></li>
                        <label><?php echo mb_strimwidth($data['event_description'], 0, 25, "..."); ?></label><br>
                        <label><?php echo $data['event_date'] ?></label>
                </div>
                <?php if (++$i == 4) break; ?>
                <?php endforeach; ?>    
                
            </div>
            
        </ul>
    </nav>

    <!-- This is where the google map will be shown -->
    <div id="map" style="height: 100%; width:100%;"></div>
    <div hidden id="legend" style="background: rgba(255,255,255,0.8); border: 3px solid #000; padding: 10px; margin: 10px; width:10rem; margin-top: 1.25rem; "><h3>Legend</h3></div>

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

    <!-- Delete Modal -->
    <div class="modal fade" id="confirm-delete">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete This Hotspot?</h4><button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>

            

            <div class="modal-body justify-content-center d-flex">
                <form method="POST" class="form bg mt-5" id="delete-form" action="oogabooga/mali/4">
                    <button type="submit" id="create-hotspot-button" class="btn btn-danger justify-content-center" data-bs-dismiss="modal">Yes, Delete It</button>
                </form>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
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

        const icons = {
            light_warning: {
            name: "Light Warning",
            icon: "<?php echo base_url('assets/images/light-warning-square.png')?>",
            },
            moderate_warning: {
            name: "Moderate Warning",
            icon: "<?php echo base_url('assets/images/moderate-warning-square.png')?>",
            },
            critical_warning: {
            name: "Critical Warning",
            icon: "<?php echo base_url('assets/images/critical-warning-square.png')?>",
            },
            map_pin: {
            name: "Event Pin",
            icon: "<?php echo base_url('assets/images/map-pin.svg')?>",
            },
        };  

        const legend = document.getElementById("legend");
        for (const key in icons) {
            const type = icons[key];
            const name = type.name;
            const icon = type.icon;
            const div = document.createElement("div");

            div.innerHTML = '<img src="' +icon+ '" style="padding: 5px; width:20%"> ' + name;
            legend.appendChild(div);
        }

        
        map.controls[google.maps.ControlPosition.LEFT_TOP].push(legend);
        setTimeout(() => {
            document.getElementById("legend").hidden = false;
        }, 2500);
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
                // console.log(data);
                AddHotspots(data);
                // initHotspotEdit(data);
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
                strokeColor: data_arg[i]['color'],
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: data_arg[i]['color'],
                fillOpacity: 0.45,
                map,
                center: hotspot_coord_var,
                radius: Number(data_arg[i]['radius']),
            });

            (function (circle, data2_arg, hotspot_coord_arg) {
                var content_var

                if(isLoggedin == '1'){
                    content_var = "<div style = 'width:200px;min-height:40px'> <h5>" + data2_arg['name'] + "</h5>" + 
                    data2_arg['description'] + 
                    "<br><br><label><strong>" + data2_arg['infected'] +" Infected </label></strong>"+
                    "<br><br><button type='button' id='hotspot-edit-" + data2_arg['id'] + "' onclick='hotspotEdit("+ data2_arg['id'] +")' class='btn btn-primary'>Edit</button>" +
                    "<button type='button' data-bs-toggle='modal' data-bs-target='#confirm-delete' id='hotspot-delete-" + data2_arg['id'] + "' onclick='hotspotDelete("+ data2_arg['id'] +")' class='btn btn-danger'>Delete</button>" +
                    "</div>";
                }
                else{
                    content_var = "<div style = 'width:200px;min-height:40px'> <h5>"+ data2_arg['name'] + "</h5>" + data2_arg['description'] + "<br><br><label><strong>" + data2_arg['infected'] +" Infected </label></strong>"+"</div>";
                }

                google.maps.event.addListener(circle, "click", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow.setContent(content_var);
                    infoWindow.setPosition(hotspot_coord_arg);
                    infoWindow.open(map, circle);
                });

                google.maps.event.addListener(map, "rightclick", function (e) {
                    circle.setVisible(!circle.getVisible());
                });

            })(cityCircle, data_arg[i], hotspot_coord_var);
        }
        // initHotspotEdit(data_arg);
    }

    document.getElementById("create-event-button").onclick = function () {
        window.location.href = "<?php echo base_url('create-event')?>"+"/" +lat+"/" +lng;
    };

    document.getElementById("create-hotspot-button").onclick = function () {
        window.location.href = "<?php echo base_url('create-hotspot')?>"+"/" +lat+"/" +lng;
    };

    function hotspotEdit(hotspot_id_arg){
        // console.log(document.getElementById("hotspot-edit-"+hotspot_id_arg));
        document.getElementById("hotspot-edit-"+hotspot_id_arg).onclick = function () {
            window.location.href = "<?php echo base_url('edit-hotspot/')?>"+ hotspot_id_arg;
        };
    }

    function hotspotDelete(hotspot_id_arg){
        document.getElementById("delete-form").action = "<?php echo base_url('delete-hotspot/'); ?>" + hotspot_id_arg;
        console.log(document.getElementById("delete-form").action);
    }

    //triggered when modal is about to be shown
    $('#confirm-delete').on('show.bs.modal', function(e) {
        //get data-id attribute of the clicked element
        var bookId = $(e.relatedTarget).data('book-id');
        //populate the textbox
        $(e.currentTarget).find('input[name="bookId"]').val(bookId);
    });
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=<?php echo env('GOOGLE_MAPS_KEY')?>&libraries=places&callback=initialize">
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

