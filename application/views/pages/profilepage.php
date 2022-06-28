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
    
<div class="form bg ">
        <div class="adminbox2 ">
            <div class="mb-3">
            <div class = "profile-photo">
            <img src="<?php echo base_url('/assets/images/Dummy01.png')?>" width="120" height="120"  class="rounded-circle">
             </div>
             <div class="mb-3">
             <h3 style="text-align:left"><b>About Me<b><h3>
             <h4 style="text-align:left"><b>Username: Aljonatics 420<b><h4>
             <h4 style="text-align:left"><b>Position: Barangay Chairman<b><h4>
             <h4 style="text-align:left"><b>Birthday: August 9, 1996<b><h4>
            </div>
            <button type="submit" class="btn btn-custom" name="edit" >Edit</button>

</div>
</div>

<div class="hopiumbox">
<h4 style="text-align:center"><b>Event Attendance<b><h4>
<body>
    <nav>
        <ul>
            <div class="annoucements"  style="overflow-y: auto; height: 100%; max-height: 65vh">
                <?php $i = 0;
                 foreach($baranggay_event as $data) : ?>
                        <li><a href="<?php echo base_url('Show_Events/view/'.$data['id'].'/'); ?>"><?php echo $data['event_name']; ?></a></li>
                <?php if (++$i == 4) break; ?>
                <?php endforeach; ?>    
            </div>
        </ul>
    </nav>
</div>
</div>