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
    <form method="post" class="form bg mt-5" action="<?php echo base_url('Homes/edit_acc'); ?>">
        <div class="adminbox ">
            <div class="mb-3">
            <h2 style="text-align:center"><b>BOHMS Account Edit<b><h2>
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" value="<?php echo $user['name'];?>" placeholder="<?php echo $user['name'];?>" name="name">
            </div>

            <div class="mb-3">
                <span>Position</span>
                <select class="form-control" value="<?php echo $user['Position'];?>" placeholder="position" name="Position">
                    <option value="Baranggay Chairman">Baranggay Chairman</option>
                    <option value="Baranggay Councilor">Baranggay Councilor</option>
                    <option value="Baranggay Secretary">Baranggay Secretary</option>
                    <option value="Baranggay Treasurer">Baranggay Treasurer</option>
                    <option selected value="Baranggay Board Member">Baranggay Board Member</option>
                </select>
                <!-- <input type="text" class="form-control" placeholder="Sex" name="sex"> -->
            </div>
            
            <div class="mb-3">
                <span>Date of Birth</span>
                <input type="date" required class="form-control"  value="<?php echo $user['Birthdate'];?>" placeholder="Date of Birth" name="Birthdate">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-login" name="Save" >SAVE</button>
            </div>

            <?php echo validation_errors(); ?>
        </div>
    </form>