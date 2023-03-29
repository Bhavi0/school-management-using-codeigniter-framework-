<div class="container">
  <div class="container shadow-container">

    <hr>
    <div class="d-flex justify-content-between align-items-center">
      <div class="btn-group">
      <h2>All Students of class <?php echo $class['class_no']; ?></h2>
      </div>
      <input class="form-control mb-3" id="myInput" type="text" placeholder="Search .." style="width:50%;">
    </div>
    <div class="table-responsive-sm">
      <table class="table table-bordered table-striped table-hover ">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Address</th>
            <th>Weekly Marks </th>
            <th>Monthly Marks</th>
            <th>Quarterly Marks</th>
            <th>Annual Marks</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="myTable">
          <?php foreach ($students as $student) { ?>
          <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['gender']; ?> </td>
            <td><?php echo $student['class_no']; ?></td>
            <td><?php echo $student['address']; ?></td>
            <td><?php echo $student['weekly_marks']; ?></td>
            <td><?php echo $student['monthly_marks'] ?></td>
            <td><?php echo $student['quarterly_marks'] ?></td>
            <td><?php echo $student['annual_marks'] ?></td>
            <td>
              <div class="btn btn-group">
                <a class="btn btn-info"
                  href="<?php echo base_url() . 'student/edit_student/' . $student['class_no']; ?>">Edit</a>
                <a class="btn btn-danger"
                  href="<?php echo base_url() . 'student/delete_student/' . $student['id']; ?>">Delete</a>
              </div>
            </td>
          </tr>
          <?php } ?>

        </tbody>
    </div>
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

