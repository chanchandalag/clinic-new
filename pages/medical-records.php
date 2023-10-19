<div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Medical Records</b></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">

                
                 <?php
                  if(isset($_GET['status']) && $_GET['status'] === 'success'){
                      echo '<div class="alert alert-success"><i class="fa fa-check-circle"></i> <b>Success!</b> Data saved!</div>';
                    }else{
                      echo '<div class="alert alert-info"><i class="fa fa-envelope"></i> This screen displays the medical records</div>';                        
                  }
                ?>


                <table class="table">
                  <tr>
                    <thead>
                      <th><i class="fa fa-user"></i></th>
                      <th>Patient's Name</th>
                      <th>Course/Yr./Sec.</th>
                      <th>ID No.</th>
                      <th>Date Added</th>
                      <th>
                        <div class="input-group">
                          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                          &nbsp;<button type="button" class="btn btn-primary"><i class="fas fa-search "> search </i></button>
                        </div>
                      </th>    
                    </thead>
                  </tr>
                  <tbody>
                    <?php

                      $query = "SELECT * FROM `medical` JOIN patient ON patient.id = medical.sid";
                      $res = mysqli_query($conn,$query);
                      while($rows = mysqli_fetch_assoc($res)):  
                    ?>
                    <tr>
                      <td><i class="fa fa-user"></i></td>
                      <td><?=$rows['first_name'];?> <?=$rows['middle_name'];?> <?=$rows['last_name'];?> <?=$rows['extension_name'];?></td>
                      <td><?=$rows['course'];?> / <?=$rows['year'];?> / <?=$rows['section'];?></td>
                      <td><?=$rows['ID_number'];?></td>
                      <td><?=$rows['date_added'];?></td>
                      
                       <td >
                          <a class="btn btn-primary btn-sm" href="/?page=medical-view&id=<?=$rows['sid'];?>"><i class="fa fa-folder-open"></i> View</a>
                          <a class="btn btn-info btn-sm" href="/?page=medical-edit&id=<?=$rows['sid'];?>"><i class="fas fa-pencil-alt"></i> Update</a>
                          <a class="btn btn-info btn-sm" onclick="return confirm('Are you sure you want to send this into Consultations')" href="/pages/consultation-send.php?id=<?=$rows['id'];?>"><i class="fas fa-share-square"></i> Send</a>
                        </td>
                        <td>
                          <a onclick="return delete_data('medical-delete',<?=$rows['mid'];?>);" class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i> </a>
                        </td>
                    </tr>
                  <?php endwhile;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer-->
            </div>

