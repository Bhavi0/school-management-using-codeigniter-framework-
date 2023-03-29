<div class="container">
  <div class="container shadow-container">
    <hr>
    <div class="row welcome text-center welcome">
      <div class="col-12">
        <h3 class="display-4">Students Categorized By Class</h3>
      </div>

    </div>
    <hr>
  </div>
</div>

<div class="container  mt-3" style="background-color: #e3f2fd;">
  <h3 class="text-center pt-2">Welcome to dashboard</h3>
  <hr>
  <div class="row ">

    <?php
foreach ($all_class as $class) {
  ?>
    <div class="col-sm-2  bg-white border m-3 p-3   text-center">
      <h3>Class - <?php  echo $class['class_no'] ?></h3>

      <a href="<?php echo base_url() . 'student/get_students/' . $class['class_no']; ?>" class="btn btn-info btn">View
        students </a>
    </div>
    <?php } ?>
  </div>
</div>