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

<div class = "profile pt-3">
        <div class="m-3 cover-photo-container">
                <img src="<?php echo base_url('assets/images/defaultcover.png');?>" class= "cover-photo" >
        </div>
        <div class="trending-profile-img-box">
            <div class = "profile-photo">
                <!-- Profile Picture -->
                <img src="<?php echo base_url('assets/images/Dummy01.png');?>" width= "120" height="120"  class="rounded-circle">
            </div>
            
            <div class="text-dark text-center mt-3 pb-3 mb-3">
                <h3><span><b>Name: <?php echo $user['name'];?></b></span><h3>
                <h3><span><b>Position: <?php echo $user['Position'];?></b></span><h3>
                <h3><span><b>Birthdate: <?php echo $user['Birthdate'];?></b></span><h3>
                <h3><span><b><a href="<?php echo base_url('Homes/edit_acc'); ?>" class="list-link screen-sm-hidden mb-5" style="margin-left:10rem; color: white; background:#4073AF; border-radius: 15px; width:6rem;">Edit</a></b></span><h3>
            </div>
        </div>

        <div class="card pt-3 mt-5" style="background: #4073AF; border-radius: 15px; height: auto; overflow-y: visible;">
        <h4 style="text-align:center; color:white;"><b>Events Created:<b><h4>
                <ul>
                <div class="annoucements pt-5" style="overflow-y: auto; height: 300px; max-height: 65vh">
                    <?php
                        foreach($baranggay_event as $data) : ?>
                            <table class="table text-white table-borderless table-hover table-wrapper-scroll-y my-custom-scrollbar" >
                            <thead><tr><th></th></tr></thead>
                            <tbody>
                            <tr>
                                    <td><li><a href="<?php echo base_url('Show_Events/view/'.$data['id'].'/'); ?>"><?php echo mb_strimwidth($data['event_name'], 0, 15, "..."); ?></a></li></td>
                                    <td><label><?php echo mb_strimwidth($data['event_description'], 0, 15, "..."); ?></label><br></td>
                                    <td><label><?php echo $data['event_date'] ?></label></td>
                            </tr>
                            </tbody>
                            </table>
                        <?php endforeach; ?>
                </div>
                </ul>
        </div>
<!-- </div> -->

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

