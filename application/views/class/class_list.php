<div class="container">

  <div class="container shadow-container">

    <hr>
    <div class="row welcome text-center welcome">
      <div class="col-12">
        <h3 class="display-4">All Class</h3>
      </div>

    </div>
    <hr>


  </div>
</div>

<div class="container mt-3">

  <div class="d-flex mb-3">
    <div class="p-2 flex-fill ">
      <h3 class="text-center">All Class</h3>
      <table class="table table-bordered table-striped table-hover ">
        <thead>
          <tr>
            <th>#</th>
            <th>Class No</th>
            <th>Delete</th>

          </tr>
        </thead>
        <tbody class="text-center"kya>
          <?php foreach($all_class as $class){ ?>
          <tr>
            <td><?php echo $class['c_id']; ?></td>
            <td><?php echo $class['class_no'] ?></td>
            <td>
              <a class="btn btn-danger"
                href="<?php echo base_url() . 'class_category/delete_class/' . $class['c_id']; ?>"><i class="fa-sharp fa-solid fa-trash"></i> Delete</a>
            </td>
          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>

    <div class="p-2 flex-fill ">
      <h3 class="text-center">Add class</h3>
      <div class="border  ">
        <form action="class_category/add_class" method="post" class="form-container mx-auto mb-3 " style="width:70%"
          enctype="multipart/form-data">
          <form>

            <div class="form-group pt-3">
              <input type="text" class="form-control" name="class" placeholder="Enter class">
            </div>
            <div class="">
              <button type="submit" class="btn btn-secondary">Add class</button>
            </div>
          </form>
        </form>
            <div class="text-center text-danger">
            <?php if($this->session->flashdata('errors')): ?>
        <?php echo $this->session->flashdata('errors'); ?>
        <?php endif; ?>
            </div>
      </div>
    </div>

  </div>
