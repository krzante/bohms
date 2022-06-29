<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSCS-3C | Home</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>">
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

<body style="overflow-y:hidden">
<nav>
  <ul>
  <li><a href="<?php echo base_url('profilepage'); ?>">Account</a></li>
  <li><a href="<?php echo base_url('patient_records'); ?>" class="list-link screen-sm-hidden">Patient Records</a></li>
  </ul>
</nav>

<div class = "profile">
        <div class="m-3 cover-photo-container">
                <img src="<?php echo base_url('assets/images/defaultcover.png');?>" class= "cover-photo" >
            </div>
<div class="trending-profile-img-box">
        <div class = "profile-photo">
            <!-- Profile Picture -->
            <img src="<?php echo base_url('assets/images/Dummy01.png');?>" width= "120" height="120"  class="rounded-circle">
        </div>
        
        <div class="text-dark text-center mt-3">
            <h3><span><b>BOHMS User</b></span><h3>
        </div>

        <div class="row" style="height: 300px !important;">
                <div class="bg-light text-dark about ">
                    <h2>About Me</h2>
                    <p>Position: Barangay Chairman</p>
                    <p>Birthday: August 9, 1996</p>
                    <a type="submit" id="edit" class="btn btn-custom" name="edit" >EDIT PROFILE</a>
                </div>
</div>

<div class="bg-light text-dark hopiumbox">
<h4 style="text-align:center"><b>Event Attendance<b><h4>
        <ul>
        <div class="annoucements" style="overflow-y: auto; height: 100%; max-height: 65vh">
            <li><a>Kirby</a></li>
            <li><a>Kirby</a></li>
            <li><a>Kirby</a></li>
            <li><a>Kirby</a></li>
            </div>
        </ul>
</div>
</body>

<style>
  .announcements {
position: relative;
width:auto;
height: 550px;
overflow-y: hidden;
}
.li{
display: inline-block;
}
  </style>

