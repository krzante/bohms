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
        <div class="adminbox ">
            <div class="mb-3">
            <h2 style="text-align:center"><b>BOHMS Password Change<b><h2>
            </div>

            <div class="mb-3">
                <input type="text" disabled class="form-control" placeholder="Insert Username Here" name="Username">
            </div>

            <div class="mb-3">
                <span>Old Password</span>
                <input type="password" class="form-control" name="old password" id="phone">
                <?php echo form_error("Password", '<p class="text-danger">','</p>');?> 
            </div>

            <div class="mb-3">
                <span>New Password</span>
                <input type="password" class="form-control" name="old password" id="phone">
                <?php echo form_error("Password", '<p class="text-danger">','</p>');?> 
            </div>

            <div class="mb-3">
                <span>Confirm New Password</span>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                <?php echo form_error("Confirm Password", '<p class="text-danger">','</p>');?> 
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-login" name="Cancel" >Cancel</button>
                <button type="submit" class="btn btn-login" name="Save" >SAVE</button>
            </div>
        </div>
    </div>