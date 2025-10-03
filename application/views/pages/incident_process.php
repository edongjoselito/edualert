                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">

                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb p-0 m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>pages/userlist">Manage User</a></li>
                                            <li class="breadcrumb-item active">Add New User</li>
                                        </ol> -->
                                    </div>

                                    
                                <?php if($this->session->flashdata('success')) : ?>

                                    <?= '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>'
                                            .$this->session->flashdata('success'). 
                                        '</div>'; 
                                    ?>
                                    <?php endif; ?>

                                    <?php if($this->session->flashdata('danger')) : ?>
                                    <?= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>'
                                            .$this->session->flashdata('danger'). 
                                        '</div>'; 
                                    ?>
                                    <?php endif;  ?>

                                    <?= validation_errors(); ?>
                                    
                                   
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                       <!-- ============================================================== -->
                       <!-- Main Content here -->
                       <!-- ============================================================== -->

                       <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Description of the Incident</h4>

                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <?= nl2br(htmlspecialchars($data->incident_details)); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                            $attributes = array('class' => 'parsley-examples');
                            echo form_open('pages/incident_process', $attributes);
                        ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Reporter Information</h4>

                                            <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="form-row">
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                        <label for="first-name">First Name </label>
                                                                            <input type="text" class="form-control" value="<?= $data->firstName; ?>" name="firstName">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                            <label for="school">Middle Name</label>
                                                                            <input type="text" class="form-control" value="<?= $data->middleName; ?>" name="middleName">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                        <label for="last-name">Last Name</label>
                                                                            <input type="text" class="form-control" value="<?= $data->lastName; ?>" name="lastName">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                        <label for="school">E-mail </label>
                                                                            <input type="text" class="form-control" value="<?= $data->report_email; ?>" name="email">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                        <label for="first-name">Position/Role</label>
                                                                            <input type="text" class="form-control" value="<?= $data->firstName; ?>" name="firstName">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                            <label for="school">Contact Number</label>
                                                                            <input type="text" class="form-control" value="<?= $data->contact; ?>" name="Contact Number">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Person(s) Involved</h4>

                                            <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="form-row">
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                        <label for="first-name">First Name </label>
                                                                            <input type="text" class="form-control" value="<?= $data->vfirstname; ?>" name="firstName">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                            <label for="school">Middle Name</label>
                                                                            <input type="text" class="form-control" value="<?= $data->vmiddlename; ?>" name="middleName">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                        <label for="last-name">Last Name</label>
                                                                            <input type="text" class="form-control" value="<?= $data->vlastname; ?>" name="lastName">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="col-lg-2">
                                                                        <div class="form-group">
                                                                        <label for="first-name">Age Of Victim</label>
                                                                            <input type="text" class="form-control" value="<?= $data->age; ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" onpaste="return false" name="age">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <div class="form-group">
                                                                        <label for="first-name">Sex</label>
                                                                            <select id="sex" name="sex" class="form-control" required>
                                                                            <option value=""></option>
                                                                            <option  <?php if($data->refer_type == 0){echo " selected ";} ?> value="0">Male</option>
                                                                            <option  <?php if($data->refer_type == 1){echo " selected ";} ?> value="1">Female</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                            <label for="school">Role (Student/Staff/Visitor/Others)</label>
                                                                            <input type="text" class="form-control" value="<?= $data->involved_role; ?>" name="involved_role">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>




                       <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4"><?= $title; ?></h4>

                                        

                                            <!-- Form row -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">

                                                            <div class="form-row">
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                    <label for="first-name">Date of Incident</label>
                                                                        <input type="date" class="form-control" value="<?= $data->date_incident; ?>" name="date_incident" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                    <label for="first-name">Time of Incident</label>
                                                                        <input type="time" class="form-control" value="<?= $data->itime; ?>" name="itime" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="division">Grade Level</label>
                                                                        <select id="gl" name="gl" class="form-control" required>
                                                                            <option value="">Select Grade Level</option>
                                                                             <?php for ($i = 1; $i <= 12; $i++): ?>
                                                                                <option <?php if($i == $data->gl){echo " selected ";}?> value="<?= $i ?>">Grade <?= $i ?></option>
                                                                             <?php endfor; ?>
                                                                        </select>
                                                                        
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="division">Type of Incident</label>
                                                                        <input id="courseInput" name="course" class="form-control" list="courseList" placeholder="Start typing…" required />
                                                                        <datalist id="courseList">
                                                                        <option value="Accident"></option>
                                                                        <option value="Misconduct"></option>
                                                                        <option value="Injury"></option>
                                                                        <option value="Property Damage"></option>
                                                                        </datalist>
                                                                    </div>
                                                                </div>
                                                                
                                                                

                                                                
                                                                
                                                            </div>

                                                            <div class="form-row">

                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                    <label for="first-name">Perpetrator</label>
                                                                        <input type="text" class="form-control" value="<?= $data->perpetrator; ?>" name="perpetrator">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label for="refer_type">Refer Type</label>
                                                                        <select id="refer_type" name="refer_type" class="form-control" required>
                                                                            <option value="">Select Type</option>
                                                                            <option <?php if($data->refer_type == 0){echo " selected ";} ?> value="0">Internal</option>
                                                                            <option <?php if($data->refer_type == 1){echo " selected ";} ?> value="1">External</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                

                                                                

                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label for="premise_category">Premise Category</label>
                                                                        <select id="premise_category" name="premise_category" class="form-control" required>
                                                                            <option value="">Select Category</option>
                                                                            <option <?php if($data->premise_category == 0){echo " selected ";} ?> value="0">School Premise</option>
                                                                            <option <?php if($data->premise_category == 1){echo " selected ";} ?> value="1">Outside School Premise</option>
                                                                        </select>
                                                                        
                                                                    </div>
                                                                </div>


                                                            </div>


                                                            <div class="form-row">

                                                            <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label for="incident_location">Location of Incident</label>
                                                                        <input type="text" class="form-control" value="<?= $data->incident_location; ?>" name="incident_location">
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-row">
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                    <label for="first-name">Emergency Contact Number</label>
                                                                        <input type="text" class="form-control" value="<?= $data->emergency_contact; ?>" name="emergency_contact">
                                                                    </div>
                                                                </div>

                                                                

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="premise_category">Contact Relationship</label>
                                                                        <input type="text" class="form-control" value="<?= $data->emergency_relation; ?>" name="emergency_relation">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="premise_category">Witnesses</label>
                                                                        <input type="text" class="form-control" value="<?= $data->withness; ?>" name="withness">
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="form-row">
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                    <label for="first-name">Contact No. of Learner</label>
                                                                        <input type="text" class="form-control" value="<?= $data->contact; ?>" name="contact">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="premise_category">Contact No. of Parents</label>
                                                                        <input type="text" class="form-control" value="<?= $data->contact_parent; ?>" name="contact_parent">
                                                                    </div>
                                                                </div>
                                                                

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="premise_category">Mother Name</label>
                                                                        <input type="text" class="form-control" value="<?= $data->mother; ?>" name="mother">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="premise_category">Father Name</label>
                                                                        <input type="text" class="form-control" value="<?= $data->father; ?>" name="father">
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            
                                                            <input type="hidden" class="form-control" value="<?= $this->uri->segment(3); ?>" name="id">
                                                            <input type="hidden" class="form-control" value="<?= $this->uri->segment(4); ?>" name="type">
                                                            

                                                            
                                                    

                                                            <br />
                                                            <button type="submit" value="submit" class="btn" style="background:#800000">Submit</button>

                                                            </form>
                                                            <br />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                                                    
                                            
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        

