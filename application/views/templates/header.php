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
        <!-- Google Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <!-- Header -->
    <header class="header" id="header">

        <nav class="navbar container ">
           
            <a href="<?php echo base_url('home')?>">              
                <h2 class="logo">BOHMS</h2>
            </a>

            <div class="list list-right">

                <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="ri-menu-3-line open-menu-icon"></i>
                    <i class="ri-close-line close-menu-icon"></i>
                </button>

                <?php $user = $this->session->userdata('user');
                if(isset($user) && $user!=null):?>
                
                <a href="<?php echo base_url('patient_records'); ?>" class="list-link screen-sm-hidden">Records</a>
                <a href="<?php echo base_url('create_event')?>" class="list-link screen-sm-hidden">Create Event</a>
                <a href="<?php echo base_url('create_patient_record')?>" class="list-link screen-sm-hidden">Create Patient Record</a>

                    <a href="<?php echo base_url('logouts/logout'); ?>" class="list-link screen-sm-hidden">Logout</a>

                <?php else:?>
                    <a href="<?php echo base_url('admin'); ?>" class="list-link screen-sm-hidden">Login</a>

                <?php endif; ?>

            </div>

        </nav>

    </header>
<body>