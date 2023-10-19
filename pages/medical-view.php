<?php
$id = $_GET['id'];
$query = "SELECT * FROM `medical` JOIN patient ON patient.id = medical.sid WHERE id = '$id'";
$res = mysqli_query($conn,$query);
while($rows = mysqli_fetch_assoc($res)):  
?>

<div class="card">
              <div class="card-header">
                <h5 class="text-center"><b>MEDICAL SERVICES</b></h5>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="">
                <div class="card-body container">
                <div class=" text-center"><b>MEDICAL EXAMINATION RECORDS</b></div>
                <hr class="hr"/>

                  <div class="row gy-6">
                    <div class="form-group col-md-3">
                      <label for="id">Student ID Number</label>
                      <input type="text" class="form-control" id="id" name="id" placeholder="" value="<?=$rows['ID_number'];?>">
                    </div>
                </div>
                  <div class="row gy-6">
                    <div class="form-group col-md-3">
                      <label for="fname">First Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="" value="<?=$rows['first_name'];?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="mname">Middle Name</label>
                      <input type="text" class="form-control" id="mname" name="mname" placeholder="N/A" value="<?=$rows['middle_name'];?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="lname">Last Name</label>
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="" value="<?=$rows['last_name'];?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="ename">Extension Name</label>
                      <input type="text" class="form-control" id="ename" name="ename" placeholder="N/A" value="<?=$rows['extension_name'];?>">
                    </div>
                  </div>
                  <div class="row gy-6">
                  <div class="form-group col-md-2">
                      <label for="sex">Sex</label>
                      <input type="text" class="form-control" id="sex" name="sex" placeholder="" value="<?=$rows['sex'] == 1 ? "Male" : "Female";?>">
                    </div>
                  <div class="form-group col-md-2">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="" value="<?=$rows['age'];?>">
                  </div>
                    <div class="form-group col-md-2">
                    <label for="cstatus">Civil Status</label>
                    <input type="text" class="form-control" id="cstatus" name="cstatus" placeholder="" value="<?=$rows['civil_status'];?>">
                  </div>
                    <div class="form-group col-md-2">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="" value="<?=$rows['nationality'];?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="" value="<?=$rows['course'];?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="contact">Contact No.</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="" value="<?=$rows['contact'];?>">
                  </div>
                  </div>
                  <hr class="hr"/>
                  <div class=""><b>I. MEDICAL HSITORY</b> - HAS APPLICANT SUFFERED FROM, OR BEEN TOLD HE HAD, ANY OF THE FOLLOWING CONDITIONS.</div>
                  <hr class="hr"/>
                  
                <div class="card-body container">
                  <div class="row gy-6">
                  <label class="col-md-4">&nbsp;&nbsp; YES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NO</label> 
                  <label class="col-md-4">&nbsp;&nbsp; YES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NO</label>
                  <label class="col-md-4">&nbsp;&nbsp; YES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NO</label>
                
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Nose or throat trouble</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Ear trouble or deafness</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Asthma</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Tuberculosis</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">High blood pressure</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Heart trouble</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Cancer or tumor</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Mental disorders</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Stomach pain or ulcer</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Kidney or bladder trouble</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Chronic cough</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Seizures</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Frequent headaches</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Dizziness</label>
                </div>
                <div class="form-check col-md-4">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Dysmennorhea</label>
                </div>
              </div>
            </div>
            <br>
            <br>
            <hr class="hr"/>
            <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> I hereby permit the Palompon Institute of Technology and the undersigned to furnished such information the company may need pertaining to my health status and other pertinent medical findings and do hereby release them from any and all legal responsibilty by doing so. I also certify that my medical history contained above, is tru and any false statement will disqualify me from myemployment, benefits and claims.</b></p>
            <br>
            <br>
            <p class="border-top text-center"><b>Signature of Examinee</b></p>

            <hr class="hr"/>
             <div class=""><b>II. PHYSICAL EXAMINATION</b> - TO BE COMPLETED BY EXAMINING PHYSICIAN</div>
              <hr class="hr"/>

                    
                <!-- /.card-body -->

                <div class="card-footer">
                </div>
                <?php endwhile;?>
              </div>
            </form>
            


