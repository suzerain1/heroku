<div class="jumbotron text-center">
     <h2>Employee Management with Payroll Systems</h2>
</div>

<div class="container">
     <div class="col-sm-4"></div>
     <div class="col-sm-4">
          <p style="color:red;text-align:center"><?= $this->session->flashdata('err_message'); ?></p>
          <form action="<?= base_url("login/login_process")?>" method="POST">
            <div class="form-group">
              <label for="email">Username:</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <a href="<?= base_url('register'); ?>">Register</a>
          </form>
     </div>
     <div class="col-sm-4"></div>
</div>
