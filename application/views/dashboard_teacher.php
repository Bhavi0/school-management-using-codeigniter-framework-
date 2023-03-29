<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container  mt-3" style="background-color:#b9e3ea;border:1px solid #5dbecd;">
<?php if($this->session->userdata('teacher_username')): ?>
<?php $username =  ($this->session->userdata('teacher_username')); ?>
  <h3 class="text-center text-dark pt-2">Welcome to Teacher's dashboard: <span class="text-secondary"><?php echo "<b>".ucfirst($username)."</b>";?></span></h3>
  <?php endif; ?>
  <hr>
  <div class="row border-dark">
  

    <div class="col-sm-2  bg-white  m-3 p-3   text-center" style="">
      <h3>Class - 1</h3>
      <p>Total Students - <?php echo $class1count; ?></p>
    </div>
    <div class="col-sm-2  bg-white border m-3 p-3   text-center">
      <h3>Class - 2</h3>
      <p>Total Students - <?php echo $class2count; ?></p>
    </div>
    <div class="col-sm-2  bg-white border m-3 p-3   text-center">
      <h3>Class - 3</h3>
      <p>Total Students - <?php echo $class3count; ?></p>
    </div>
    <div class="col-sm-2  bg-white border m-3 p-3   text-center">
      <h3>Class - 4</h3>
      <p>Total Students - <?php echo $class4count; ?></p>
    </div>
    <div class="col-sm-2  bg-white border m-3 p-3   text-center">
      <h3>Class - 5</h3>
      <p>Total Students - <?php echo $class5count; ?></p>
    </div>
    <div class="col-sm-2  bg-white border m-3 p-3   text-center">
      <h3>Class - 6</h3>
      <p>Total Students - <?php echo $class6count; ?></p>
    </div>
    <div class="col-sm-2  bg-white border m-3 p-3   text-center">
      <h3>Class - 7</h3>
      <p>Total Students - <?php echo $class7count; ?></p>
    </div>
    <div class="col-sm-2  bg-white border m-3 p-3   text-center">
      <h3>Class - 8</h3>
      <p>Total Students - <?php echo $class8count; ?></p>
    </div>
  </div>
</div>


