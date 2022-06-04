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
    <div class = "patientbox">
            <div class="mb-3">
            <h2 style="color:#6495ED;text-align:center"><b>EDIT PATIENT INFO<b><h2>
            <img src="<?php echo base_url('/assets/images/Dummy01.png')?>" width="125" height="125" >
            </div>
            <form>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Patient Name" name="patname">
            </div>
            
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Birthplace" name="bplace">
            </div>

            <div class="mb-3">
            <input type="text" class="form-control" placeholder="Sex" name="sex">
            </div>
            
            <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Birthdate" name="bday">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Blood Type">
            </div>

            <div class="mt-3">
                <input type="text" class="p-5 form-control" placeholder="Current Health Status" name="CHS">
            </div>
            
            <div class="mt-3">
                <input type="text" class="p-5 form-control" placeholder="Medical History" name="medhis">
            </div>
            </form>

            <div class="mt-5">
                <button type="submit" class="btn btn-login" name="Cancel" >Cancel</button>
                <button type="submit" class="btn btn-login" name="Save" >SAVE</button>
            </div>
        </div>
    </div>
</div>