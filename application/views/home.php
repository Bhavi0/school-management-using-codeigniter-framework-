<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row ">
            <div class="col-md-3 "></div>
            <div class="col-md-6 border border-top-0 border-bottom-0 border-danger ">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="<?php echo base_url().'home/signin' ?>" method="post">
                  <h5 class="fw-normal mb-3 pb-3 text-center font-weight-bold" style="letter-spacing: 1px;">Sign into
                    your
                    account</h5>
                  <p class="text-danger bg-light text-center">
                    <?php if ($this->session->flashdata('error_message')) : ?>
                    <?php $error = $this->session->flashdata('error_message'); ?>
                    <?php echo ucwords($error); ?>
                    <?php endif; ?>
                  </p>
                  <div class="form-outline mb-4 mt-4">
                    <input type="email" name="email" id="form2Example17" placeholder="Enter your email"
                      class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example27" placeholder="enter password"
                      class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>