<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home-styles.css')?>">
    

    <title>Admin Dashboard</title>
</head>

<body>
    <nav>
        <ul>
            <h4 >Barangay</h4>
            <h5 >Announcements</h5>
            <div class="annoucements">
                <div class="event-card">
                    <li><a href="#">Monkeypox</a></li>
                    <label>Short description</label><br>
                    <label>12/31/0000</label>
                </div>
                
                <div class="event-card">
                    <li><a href="#">Covid Vaccination</a></li>
                    <label>Short description</label><br>
                    <label>12/31/0000</label>
                </div>

                <div class="event-card">
                    <li><a href="#">Feeding Program</a></li>
                    <label>Short description</label><br>
                    <label>12/31/0000</label>
                </div>

                <div class="event-card">
                    <li><a href="#">Aljon Symposium</a></li>
                    <label>Short description</label><br>
                    <label>12/31/0000</label>
                </div>
            </div>
            <img src="<?php echo base_url('/assets/images/girl_with_megaphone.png')?>" >
        </ul>
    </nav>

    <img class="google-maps-img" src="<?php echo base_url('/assets/images/google_maps_placeholder.png')?>">