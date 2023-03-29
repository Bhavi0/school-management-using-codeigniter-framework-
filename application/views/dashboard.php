<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mt-3" style="background-color:#b9e3ea;border:1px solid #5dbecd;">
  <hr>
  <?php if($this->session->userdata('username')): ?>
  <?php $username =  ($this->session->userdata('username')); ?>
  <h3 class="text-center text-dark pt-2">Welcome to Admin dashboard: <span class="text-secondary"><?php echo "<b>".ucfirst($username)."</b>";?></span></h3>
  <?php endif; ?>
  <hr>
  <p class="text-primary bg-primary text-center">
    <?php
  if ($this->session->flashdata('login_success')) :
  ?>
    <?php echo ($this->session->flashdata('login_success')); ?>
    <?php endif; ?>
  </p>

  <?php if ($this->session->flashdata('success')) : ?>
                    <?php $error = $this->session->flashdata('success'); ?>
                    <?php echo ucwords($error); ?>
                    <?php endif; ?>
  <div class="row ">

 
    <div class="col-sm-2  bg-light border m-3 p-3   text-center">
      <h3>Class - 1</h3>
      <p>Total Students - <?php echo $class1count; ?></p>
    </div>
    <div class="col-sm-2  bg-light border m-3 p-3   text-center">
      <h3>Class - 2</h3>
      <p>Total Students - <?php echo $class2count; ?></p>
    </div>
    <div class="col-sm-2  bg-light border m-3 p-3   text-center">
      <h3>Class - 3</h3>
      <p>Total Students - <?php echo $class3count; ?></p>
    </div>
    <div class="col-sm-2  bg-light border m-3 p-3   text-center">
      <h3>Class - 4</h3>
      <p>Total Students - <?php echo $class4count; ?></p>
    </div>
    <div class="col-sm-2  bg-light border m-3 p-3   text-center">
      <h3>Class - 5</h3>
      <p>Total Students - <?php echo $class5count; ?></p>
    </div>
    <div class="col-sm-2  bg-light border m-3 p-3   text-center">
      <h3>Class - 6</h3>
      <p>Total Students - <?php echo $class6count; ?></p>
    </div>
    <div class="col-sm-2  bg-light border m-3 p-3   text-center">
      <h3>Class - 7</h3>
      <p>Total Students - <?php echo $class7count; ?></p>
    </div>
    <div class="col-sm-2  bg-light border m-3 p-3   text-center">
      <h3>Class - 8</h3>
      <p>Total Students - <?php echo $class8count; ?></p>
    </div>
  </div>
</div>

<div class='container'>

  <div class="text-center mt-4 ">
  <div class="d-flex justify-content-between align-items-center">
      <div class="btn-group">
      <h2>Total teachers In School :- <?php echo $teacher_count; ?></h2>
      </div>
      <input class="form-control mb-3" id="myInput" type="text" placeholder="Search .." style="width:50%;">
    </div>  
    <div class="row">
      <table class="table table-bordered table-hover table-striped ">
        <thead style="font-weight: bold;">
          <tr>
            <th>Id</th>
            <th>Teacher-Name</th>
            <th>Address</th>
            <th>Phone No</th>
            <th>Email</th>
          </tr>
        </thead>

        <tbody id="myTable">
          <?php
foreach ($teach as $tee) {
  ?>
          <tr>
            <td><?php  echo $tee['id'] ?></td>
            <?php 
              $firstname = $tee['firstname'];
              $lastname =  $tee['lastname'];
            ?>
            <td><?php echo $firstname . ' ' . $lastname; ?> </td>
            <td><?php  echo $tee['address'] ?></td>
            <td><?php  echo $tee['phone_no'] ?></td>
            <td><?php  echo $tee['email'] ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>
</div>

<div class="container">
  <div class="container shadow-container">
    <hr>
    <div class="row welcome text-center welcome">
      <div class="col-12">
        <h5 class="display-4">Update school name</h5>
      </div>
    </div>
    <hr>
  </div>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
    <div class="p-2 flex-fill ">
      <div class="border  ">
        <form action="<?php echo base_url() . 'welcome/update_school/' . $school_name['id'] ?>" method="post" class="form-container mx-auto mb-3 " style="width:70%"
          enctype="multipart/form-data">
          <form>

            <div class="form-group pt-3">
              <input type="text" class="form-control" name="school_name" value="<?php echo $school_name['school_name']; ?>">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-secondary">Update School</button>
            </div>
          </form>
        </form>

      </div>
    </div>

    </div>
    <div class="col-lg-4"></div>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

