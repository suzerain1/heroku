<div class="jumbotron text-center">
     <h2>Register</h2>
</div>

<div class="container">
     <div class="col-sm-4"></div>
     <div class="col-sm-4">
          <p style="color:red;text-align:center"><?= $this->session->flashdata('err_message'); ?></p>
          <p style="color:green;text-align:center"><?= $this->session->flashdata('succ_message'); ?></p>
          <form action="<?= base_url("register/add_user")?>" method="POST">
            <div class="form-group">
              <label for="email">Username:</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label for="email">Firstname</label>
              <input type="text" class="form-control" name="fname">
            </div>
            <div class="form-group">
              <label for="email">Lastname</label>
              <input type="text" class="form-control" name="lname">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
              <label for="pwd">Confirm Password:</label>
              <input type="password" class="form-control" name="cpassword">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <a href="<?= base_url('login'); ?>">Back to login</a>
          </form>
     </div>
     <div class="col-sm-4"></div>
</div>
