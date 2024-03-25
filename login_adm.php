<?php include 'template/header.php'; ?>

<div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="fa fa-close"></span>
            </button>
          </div>
          <div class="modal-body p-4 p-md-5">
            <form action="login_admin.php" method="post" class="appointment-form ftco-animate">
              <h3>Login Admin</h3>
              <div class="">
                <label>Username</label>
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                </div>
                <label>Password</label>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
           
                <div class="form-group">
                  <input type="submit" value="Masuk" class="btn btn-primary py-3 px-4">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="fa fa-close"></span>
            </button>
          </div>
          <div class="modal-body p-4 p-md-5">
            <form action="login.php" method="post" class="appointment-form ftco-animate">
              <h3>Login User</h3>
              <div class="">
                <label>Username</label>
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                </div>
                <label>Password</label>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
           
                <div class="form-group">
                  <input type="submit" value="Masuk" class="btn btn-primary py-3 px-4">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php include 'template/footer.php'; ?>

