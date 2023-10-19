<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><b>ADD DEPENDENT RECORDS</h3>
              </div>

              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/pages/dependant-add.php">
                <div class="card-body container">
                  <?php
                    echo '<div class="alert alert-info"><i class="fa fa-envelope"></i><b> PERSONAL INFORMATION</b></div>';
                  ?>
                  <div class="row gy-6">
                  <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Sex</label>
                    <select name="sex" id="sex" class="form-control"> 
                      <option value = "1">Male</option>
                      <option value = "0">Female</option>                                        
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mname">Middle Name</label>
                    <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="haddress">Home Address</label>
                    <input type="text" class="form-control" id="haddress" name="haddress" placeholder="Enter Permanent Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter Age">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="ename">Extension Name</label>
                    <input type="text" class="form-control" id="ename" name="ename" placeholder="N/A">
                  </div>
                
                  <div class="form-group col-md-6" >
                    <label class="input-group-addon"> Date of Birth </label> 
                    <input type="date" placeholder="Payment Log date" name="dob" class="form-control" value="">
                  </div>
                </div>

                <?php
                  echo '<div class="alert alert-info"><i class="fa fa-exclamation-triangle"></i><b> EMERGENCY CONTACT INFORMATION</b></div>';
                ?>
                  <div class="row gy-6">
                  <div class="form-group col-md-6">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Email Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="relationship"> Relationship</label>
                    <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Email Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mnum"> Mobile No.</label>
                    <input type="text" class="form-control" id="mnum" name="mnum" placeholder="Email Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="tnum"> Telephone No.</label>
                    <input type="text" class="form-control" id="tnum" name="tnum" placeholder="Email Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="home"> Home Address</label>
                    <input type="text" class="form-control" id="home" name="home" placeholder="Email Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="emailadd"> Email Address</label>
                    <input type="text" class="form-control" id="emailadd" name="emailadd" placeholder="Email Address">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save"  class="btn btn-block btn-success btn-lg">Save</button>
                </div>
              </form>
            </div>


