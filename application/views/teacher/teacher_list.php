<body>
<div class="container-fluid">
  <div class="container shadow-container">
    <p class="bg-success text-center">
      <?php if ($this->session->flashdata('success_message')) : ?>
      <?php echo $this->session->flashdata('success_message'); ?>
      <?php endif; ?>
    </p>
    <hr>
    <div class="row welcome text-center welcome">
      <div class="col-12">
        <h3 class="display-4">All Available Teachers</h3>
      </div>
    </div>
    <hr>
        <input class="form-control mb-3 mr-auto" id="myInput" type="text" placeholder="Search .." style="width:50%;">
  
    <div class="table-responsive-sm">
      <table class="table table-bordered table-striped table-hover ">
        <thead>
          <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="myTable">
          <?php foreach($teacher as $teach){ ?>

          <tr>
            <td><?php echo $teach['id'] ?></td>
            <td><?php echo $teach['firstname'] ?> </td>
            <td><?php echo $teach['lastname'] ?> </td>
            <td><?php echo $teach['email'] ?></td>
            <td><?php echo $teach['phone_no'] ?></td>
            <td><?php echo $teach['address'] ?></td>
            <td>
              <div class="btn btn-group">
                <a class="btn btn-info"
                  href="<?php echo base_url() . 'teacher/edit_teacher/' . $teach['id']; ?>"><i class="fa-sharp fa-solid fa-file-pen"></i> Edit</a>
                <a class="btn btn-danger"
                  href="<?php echo base_url() . 'teacher/delete_teacher/' . $teach['id']; ?>"><i class="fa-sharp fa-solid fa-trash"></i> Delete</a>
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

</body>
</html>