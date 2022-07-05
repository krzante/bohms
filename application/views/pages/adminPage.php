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
  <li><a href="<?php echo base_url('profile'); ?>">Account</a></li>
  <li><a href="<?php echo base_url('patient_records'); ?>" class="list-link screen-sm-hidden">Patient Records</a></li>
  </ul>
</nav>

<main>
<section style="margin-top:1rem; text-align:center; justify-content:center; color:#6495ED" id="section-1"> <br><br>
    <h1><?php echo $title;?></h1>
</section>

<div class="box col-8 mt-5">
      <form action = "<?php echo site_url('patient_records/skeyword/');?>" method="post">
          <div class="input-group">
              <input type="text" name="title" placeholder="&#xf002 Search..." style="font-family:FontAwesome" id="search" class="bg-light border border-secondary form-control">
          </div>
      </form>
  <div class="container table-responsive-sm" style="min-height:570px !important; height:200px !important; padding-top:15px !important">
    <table class="table text-white table-borderless table-hover table-wrapper-scroll-y my-custom-scrollbar" >

    <thead>
      <tr>
        <th>Name</th>
        <th>Health Case</th>
        <th>Date of Case</th>
      </tr>
    </thead>

      <!-- RECORDS -->
      <?php 
      $i = 0;
      foreach($patient_records as $data) :
      ++$i;
      ?>
        <tbody>
          <tr>
            <td><?php echo $i.".)                 ";?><?php echo mb_strimwidth($data['patient_name'],0,16,"...");?></td>
            <td><?php echo mb_strimwidth($data['health_case'],0,16,"...");?></td>
            <td><?php echo $data['date_of_case'];?></td>
            <td><a href="<?php echo base_url('edit_patients/index')?>"><button type="button" class="btn btn-primary">View</button></a></td>
            <form action = "<?php echo site_url('edit_patients/delete/'.$data['id']);?>" method="post">
              <td><button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
            </tr>
        </tbody>
      <?php endforeach; ?>
      <!-- /RECORDS -->
      
    </table>
  </div>
    
</div>

  
</main>

<!-- <div style="height: 100vh;"class="container-fluid"> -->
    <!-- <div class="row"> -->




<style>
  .my-custom-scrollbar {
position: relative;
width:auto;
height: 550px;
overflow-x: hidden;
}
.table-wrapper-scroll-y {
display: inline-block;
}
  </style>
</div>

    
</body>
