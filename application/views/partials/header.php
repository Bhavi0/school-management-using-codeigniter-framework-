<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/ffbcbbbb98.js" crossorigin="anonymous"></script>
  <style>
  body {
    font-family: 'lato', sans-serif;
    font-size: 1.1rem;

  }
  </style>
</head>

<body>




  <nav class="navbar navbar-expand-lg navbar-light sticky-top mb-4 " style="background-color: #e3f2fd;">
    <a class="navbar-brand text-info" href="#"><?php echo $school_name['school_name']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
      <?php $id = $this->session->userdata('role_id') ?>
      <?php if($id == '1'): ?>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'welcome/admin_dashboard' ?>">Home <span
              class="sr-only">(current)</span></a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Teachers
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url().'teacher' ?>">Manage Teachers</a>
            <a class="dropdown-item" href="<?php echo base_url().'teacher/add_teacher' ?>">Add Teachers</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Students
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url().'student' ?>">Manage Student`</a>
            <a class="dropdown-item" href="<?php echo base_url().'student/add_student' ?>">Add Student</a>
        </li>
        <li class="nav-item"><a class=" nav-link" href="<?php echo base_url().'class_category' ?>">Class Category</a>
        </li>
       
        <?php elseif($id > '1'): ?>
          <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'welcome/teacher_dashboard' ?>">Home <span
              class="sr-only">(current)</span></a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Students
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url().'student' ?>">Manage Class</a>
            <a class="dropdown-item" href="<?php echo base_url().'student/add_student' ?>">Add Student</a>
        </li>
        <li class="nav-item"><a class=" nav-link" href="<?php echo base_url().'class_category' ?>">Class Category</a>
        </li>
    
        <?php endif; ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'home/logout' ?>">Logout</a></li>
      </ul>

    </div>
  </nav>
</body>

</html>
