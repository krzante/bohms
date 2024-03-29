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

        <form method="post" class="adminbox col-8 mt-5" action="<?php echo base_url('logins/login'); ?>">
            <div class="mb-3">
               <h1><b>BOHMS Admin Login<b></h1>
               <img src="<?php echo base_url('/assets/images/Bohmsv1.png')?>" width="100" height="100"> 
            </div>

            <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Enter Username" name="name" required>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
            </div>

            <?php echo validation_errors(); ?>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-login" name="Login" >Log In</button>
                <img src="<?php echo base_url('/assets/images/create_event.png')?>" width="155" height="155" >
            </div>

        </form>

    </div>