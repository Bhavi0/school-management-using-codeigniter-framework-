<div class="container">
  <form action="<?php echo base_url().'student/add_student' ?>" method="post" class="form-container mx-auto "
    style="width:80%" enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="student_name">Student Name</label>
        <input type="text" class="form-control" name="student_name" placeholder="Student Name">
      </div>
      <div class="form-group col-md-6">
        <label for="gender">Gender</label>
        <input type="text" class="form-control" name="gender" placeholder="Gender">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label class="control-label">Class</label>
        <select name="class" class="form-control">
          <option>Select category</option>
          <?php foreach($all_class as $class){ ?>
          <option value="<?php echo $class['class_no']; ?>">
            <?php echo $class['class_no'];?><?php echo set_select('class_no');?></option>
          <?php } ?>

        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="weekly_marks">Weekly Marks</label>
        <input type="number" class="form-control" name="weekly_marks" placeholder="Weekly Marks">
      </div>
      <div class="form-group col-md-6">
        <label for="monthly_marks">Monthly Marks</label>
        <input type="number" class="form-control" name="monthly_marks" placeholder="Monthly Marks">
      </div>
      <div class="form-group col-md-6">
        <label for="quarterly_marks">Quarterly Marks</label>
        <input type="number" class="form-control" name="quarterly_marks" placeholder="Quarterly Marks">
      </div>
      <div class="form-group col-md-6">
        <label for="annual_marks">Annual Marks</label>
        <input type="number" class="form-control" name="annual_marks" placeholder="Annual Marks">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Student Address">
    </div>

    <button type="submit" class="btn btn-success">Add student</button>
    <a href="<?php echo base_url().'student'; ?>" class="btn btn-secondary">Back</a>
  </form>
</div>

<div class="text-center text-danger">
  <?php if($this->session->flashdata('errors')): ?>
  <?php echo $this->session->flashdata('errors')?>
  <?php endif; ?>
</div>