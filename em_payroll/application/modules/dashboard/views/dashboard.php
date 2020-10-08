<!-- <div class="jumbotron text-center">
     <h2>Employee Management with Payroll Systems Dashboard</h2>
</div> -->
<?php
     // if(isset($company_data)){
     //      echo '<pre>';
     //      print_r($company_data);
     // }
?>
<div class="container">
     <div class="well"><h2>Employee Management with Payroll Systems Dashboard</h2> <a href="<?= base_url('dashboard/logout'); ?>" style="text-align:right">Logout</a> </div>
     <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#company">Company</a></li>
          <li><a data-toggle="tab" href="#department">Department</a></li>
          <li><a data-toggle="tab" href="#employee">Employee</a></li>
     </ul>

     <div class="tab-content">
          <div id="company" class="tab-pane fade in active">
               <h3>Company</h3> <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addCompany">Add Company</button>
               <table class="table table-hover">

                    <p style="text-align:center;font-size:17px;color:green"><?= $this->session->flashdata('success_message'); ?></p>
                    <p style="text-align:center;font-size:17px;color:red"><?= $this->session->flashdata('error_message'); ?></p>
                   <thead>
                     <tr>
                          <th>Company ID</th>
                          <th>Company Name</th>
                          <th>Department</th>
                          <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                         <?php foreach ($company_data as $key) { ?>
                              <tr>
                                <td><?= $key['company_id']; ?></td>
                                <td><?= $key['company_name']; ?></td>
                                <td><?= $key['department']; ?></td>
                                <td> <a href="#">Update</a> | <a href="<?= base_url('dashboard/delete_company/'.$key['company_id']) ?>">Delete</a> </td>
                              </tr>
                         <?php } ?>
                   </tbody>
                 </table>
          </div>
          <div id="department" class="tab-pane fade">
               <h3>Department</h3>
               <table class="table table-hover">
                   <thead>
                     <tr>
                       <th>Firstname</th>
                       <th>Lastname</th>
                       <th>Email</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>John</td>
                       <td>Doe</td>
                       <td>john@example.com</td>
                     </tr>
                   </tbody>
                 </table>
          </div>
          <div id="employee" class="tab-pane fade">
               <h3>Employee</h3>
               <table class="table table-hover">
                   <thead>
                     <tr>
                       <th>Firstname</th>
                       <th>Lastname</th>
                       <th>Email</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>John</td>
                       <td>Doe</td>
                       <td>john@example.com</td>
                     </tr>
                     <tr>
                       <td>July</td>
                       <td>Dooley</td>
                       <td>july@example.com</td>
                     </tr>
                   </tbody>
                 </table>
          </div>
     </div>
</div>

<!-- Modal For Company-->
<div id="addCompany" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Company</h4>
      </div>

      <div class="modal-body">
           <form action="<?= base_url("dashboard/add_company")?>" method="POST">
             <div class="form-group">
               <label for="comp_name">Company Name</label>
               <input type="text" class="form-control" name="company_name">
             </div>
             <div class="form-group">
               <label for="pwd">Department:</label>
               <input type="text" class="form-control" name="department">
             </div>
             <button type="submit" class="btn btn-default">Submit</button>
           </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
