
<body>  

    <form method="post" class="form bg mt-5" action="<?php echo base_url('create_events/create/').$lat.'/'.$lng; ?>">
        <div class="box mt-5">
            <div class="mb-3">
                <h1><b>New Baranggay Event<b></h1>
               <img src="<?php echo base_url('/assets/images/Bohmsv1.png')?>" width="100" height="100">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Event Name" name="event_name">
            </div>
            
            <div class="mb-3 input-group">
                <input type="text" class="p-5 form-control" placeholder="Event Description" name="event_description">
            </div>

            <div class="mb-3 input-group">
                <input type="datetime-local" class="form-control" placeholder="event_date" name="event_date">
            </div>

            <!-- <div class="mb-3 input-group">
                <input type="text" class="form-control" placeholder="Event Location" name="event_location">
                <button type="button" data-bs-toggle="modal" data-bs-target="#the-modal-example" class="btn btn-custom" name="Set" >Set</button>
            </div> -->

            <?php echo validation_errors(); ?>

            <div class="mb-3">
                <button type="submit" class="btn btn-custom" name="Create" >Create</button>
                <img src="<?php echo base_url('/assets/images/create_event.png')?>" width="138" height="130" >
            </div>
        </div>
    </form>


    <div class="modal fade" id="the-modal-example">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Please Read Below 👇</h4><button class="btn-close" type="button" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1929.611887830491!2d121.06293707209078!3d14.699933507386335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b0bdb6e97ee5%3A0x2c73417ca081c326!2sBarangay%20Hall%2C%20Barangay%20Fairview%2C%20Quezon%20City!5e0!3m2!1sen!2sph!4v1654936153049!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d116862.54554679655!2d90.40409584970706!3d23.749000170125925!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1550040341458" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Save yourself from this pain!</button>
        </div>
        </div>
    </div>
    </div>