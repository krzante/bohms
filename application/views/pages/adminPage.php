<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share:wght@700&display=swap" rel="stylesheet">

    <title>Admin Dashboard</title>
</head>

<body>
<nav>
  <ul>
    <li><a href="#section-1">Accounts</a></li>
    <li><a href="#section-2">Patient Records</a></li>
  </ul>
</nav>

<main>
<div class="box col-8 mt-5">

    <div class="mb-3">
        Login
    </div>

    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Enter Username" name="name" required>
    </div>

    <div class="mb-3">
        <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-custom" name="LOGIN" >Login</button>
        <img src="<?php echo base_url('/assets/images/create_event.png')?>" width="138" height="130" >
    </div>
</div>

  <section id="section-1"> <br><br>
    <h1>Section 1</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis, blanditiis expedita? Earum eligendi pariatur quaerat quos expedita ab quibusdam ratione veniam in, mollitia fuga repudiandae?</p>
  </section>
  <section id="section-2">
    <h1>Section 2</h1>
    <p>Ratione nulla nam, ipsa dignissimos corrupti veniam nostrum, laudantium asperiores sequi numquam placeat velit voluptate in praesentium non labore unde incidunt laborum maxime quae magni.</p>
  </section>
</main>

<footer>
  &copy;2018 Footer
</footer>


<!-- <div style="height: 100vh;"class="container-fluid"> -->
    <!-- <div class="row"> -->


    
</body>
