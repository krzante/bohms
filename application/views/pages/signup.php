<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
    
    <form method="post" class="form bg mt-5" action="<?php echo base_url('create_accounts/create'); ?>">
        <div class="patientbox">
            <div class="mb-3">
                <h2><b>BOHMS ADMIN Signup - Barangay Staff only!<b></h2>
               <img src="<?php echo base_url('/assets/images/Bohmsv1.png')?>" width="100" height="100">
            </div>
            
            <div class="mb-3">
                <span>Username</span>
                <input type="text" required class="form-control" placeholder="Username" name="username">
            </div>
            <div class="mb-3">
                <span>Email</span>
                <input type="text" required class="form-control" placeholder="Email" name="email">
            </div>
            <div class="mb-3">
                <span>Password</span>
                <input type="password" class="form-control" name="password" id="phone">
                <?php echo form_error("Password", '<p class="text-danger">','</p>');?> 
            </div>
            <div class="mb-3">
                <span>Confirm Password</span>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                <?php echo form_error("Confirm Password", '<p class="text-danger">','</p>');?> 
            </div>

            <div class="mb-3">
                <span>Date of Birth</span>
                <input type="date" required class="form-control" placeholder="Date of Birth" name="dbirth">
            </div>
            
            <div class="mb-3">
                <span>Position</span>
                <select class="form-control" placeholder="position" name="position">
                    <option value="Barangay Chairman">Barangay Chairman</option>
                    <option value="Barangay Councilor">Barangay Councilor</option>
                    <option value="Barangay Secretary">Barangay Secretary</option>
                    <option value="Barangay Treasurer">Barangay Treasurer</option>
                </select>
                <!-- <input type="text" class="form-control" placeholder="Sex" name="sex"> -->
            </div>

            <div class="mb-3">
                <span>Secret Key</span>
                <input type="text" required class="form-control" placeholder="Secret Key" name="seckey">
            </div>
            
            <?php echo validation_errors(); ?>
            <?php echo $this->session->flashdata('seckey'); ?>
            <div class="mb-3">
                <button type="submit" class="btn btn-custom" name="Create" >Create Account</button>
                <img src="<?php echo base_url('/assets/images/create_event.png')?>" width="138" height="130" >
            </div>
        </div>
    </form>