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

    <form method="post" class="form bg mt-5" action="<?php echo base_url('create_events/delete/'.$baranggay_event[0]['id'])?>">
        <div class="box mt-5">
            <div class="mb-3">
            <h2><b>Baranggay Event<b></h2>
            <ul>
  <li><span><?php echo $baranggay_event[0]['event_name'];?></span></li>
  <li><span><?php echo $baranggay_event[0]['event_description'];?></span></li>
  <li><span><?php echo $baranggay_event[0]['event_date'];?></span> </li>
            </ul>
        </div>       
        <div class="mb-3">
        <button type="submit" class="btn btn-custom" name="delete" >Delete</button>
         </div>            
        </div>
    </form>