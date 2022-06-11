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


<form method="post" class="form bg mt-5" action="<?php echo base_url('create_patients/update'); ?>">
    <div class = "patientbox">
            <div class="mb-3">
            <h2 style="color:#6495ED;text-align:center"><b>EDIT PATIENT INFO<b><h2>
            <img src="<?php echo base_url('/assets/images/Dummy01.png')?>" width="125" height="125" >
            </div>
            <form>
            <div class="mb-3">
                <span>Name of Patient</span>
                <input type="text" class="form-control" value="<?php echo $patient_records[0]['patient_name'];?>" placeholder="<?php echo $patient_records[0]['patient_name'];?>" name="pat_name">
            </div>
            
            <div class="mb-3">
                <span>Birthplace</span>
                <input type="text" class="form-control" value="<?php echo $patient_records[0]['birthplace'];?>" placeholder="<?php echo $patient_records[0]['birthplace'];?>" name="bplace">
            </div>

            <div class="mb-3">
                <span>Sex</span>
                <select class="form-control" value="<?php echo $patient_records[0]['sex'];?>" placeholder="<?php echo $patient_records[0]['sex'];?>" name="sex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <!-- <input type="text" class="form-control" placeholder="Sex" name="sex"> -->
            </div>
            
            <div class="row">
            <div class="col">
                <span>Date of Birth</span>
                <input type="date" class="form-control" value="<?php echo $patient_records[0]['birthdate'];?>" placeholder="<?php echo $patient_records[0]['birthdate'];?>" name="bday">
            </div>

            <div class="col">
                <span>Bloodtype</span>
                <select class="form-control" value="<?php echo $patient_records[0]['bloodtype'];?>" placeholder="<?php echo $patient_records[0]['bloodtype'];?>" name="btype">
                    <option value="O Negative">O Negative</option>
                    <option value="O Positive">O Positive</option>
                    <option value="A Negative">A Negative</option>
                    <option value="A Positive">A Positive</option>
                    <option value="B Negative">B Negative</option>
                    <option value="B Positive">B Positive</option>
                    <option value="AB Negative">AB Negative</option>
                    <option value="AB Positive">AB Positive</option>
                </select>
                <!-- <input type="text" class="form-control" placeholder="Blood Type" name="btype"> -->
            </div>

            <div class="mt-3">
                <span>Current Health Status</span>
                <input type="text" class="p-5 form-control" value="<?php echo $patient_records[0]['current_health_status'];?>" placeholder="<?php echo $patient_records[0]['current_health_status'];?>" name="CHS">
            </div>
            
            <div class="mt-3">
                <span>Medical History</span>
                <input type="text" class="p-5 form-control" value="<?php echo $patient_records[0]['medical_history'];?>" placeholder="<?php echo $patient_records[0]['medical_history'];?>" name="medhis">
            </div>

            <input type="hidden" value="<?php echo $patient_records[0]['health_case'];?>" name="hcase">
            <input type="hidden" value="<?php echo $patient_records[0]['date_of_case'];?>" name="dcase">
            <input type="hidden" value="<?php echo $patient_records[0]['id'];?>" name="id">


            <?php echo validation_errors(); ?>
            <div class="mt-5">
                <button type="submit" class="btn btn-login" name="Cancel" >Cancel</button>
                <button type="submit" class="btn btn-login" name="Save" >SAVE</button>
            </div>
        </div>
    </div>
</form>