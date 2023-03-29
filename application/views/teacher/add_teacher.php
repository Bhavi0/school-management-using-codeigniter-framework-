
<div class="container">
  <form action="<?php echo base_url().'teacher/add_teacher/' ?>" method="post" class="form-container mx-auto "
    style="width:80%" enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="firstname" placeholder="First Name">
      </div>
      <div class="form-group col-md-6">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="lastname" placeholder="last Name">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="phoneno">Phone No.</label>
        <input type="text" class="form-control" name="phoneno" placeholder="Phone No.">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
    </div>

    <button type="submit" class="btn btn-success">Add teacher </button>
    <a href="<?php echo base_url().'teacher'; ?>" class="btn btn-secondary">Back</a>
  </form>
</div>

<div class="text-center text-danger">
  <?php if($this->session->flashdata('errors')): ?>
  <?php echo $this->session->flashdata('errors')?>
  <?php endif; ?>
</div>