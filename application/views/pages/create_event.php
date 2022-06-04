<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSCS-3C | Home</title>
    <!--Bootstrap 5 elements link-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon.png">
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Swiper.js styles -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/swiper-bundle.min.css')?>" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
</head>
<body>  

    <form method="post" class="form bg mt-5" action="<?php echo base_url('create_events/create'); ?>">
        <div class="box mt-5">
            <div class="mb-3">
                <h1><b>New Baranggay Event<b></h1>
               <img src="<?php echo base_url('/assets/images/Bohmsv1.png')?>" width="100" height="100">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="event_name" name="event_name">
            </div>
            
            <div class="mb-3 input-group">
                <input type="text" class="p-5 form-control" placeholder="event_description" name="event_description">
            </div>

            <!-- <div class="mb-3 input-group">
                <input type="text" class="form-control" placeholder="event_date" name="date">
            </div> -->

            <div class="mb-3 input-group">
                <input type="text" class="form-control" placeholder="event_location" name="event_location">
                <button type="button" class="btn btn-custom" name="Set" >Set</button>
            </div>

            <?php echo validation_errors(); ?>

            <div class="mb-3">
                <button type="submit" class="btn btn-custom" name="Create" >Create</button>
                <img src="<?php echo base_url('/assets/images/create_event.png')?>" width="138" height="130" >
            </div>
        </div>
    </form>