                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">

                                    <div class="page-title-right">
                                        <ol class="breadcrumb p-0 m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>pages/userlist">Manage User</a></li>
                                            <li class="breadcrumb-item active">Update User</li>
                                        </ol>
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4"><?= $title; ?></h4>

                                        <?php 
                                            $attributes = array('class' => 'parsley-examples');
                                            echo form_open('pages/user_update', $attributes);
                                        ?>
                                            <input type="hidden" name="id" value="<?= $data->user_id; ?>">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">First Name<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" required class="form-control" name="firstName" value="<?= $data->firstName; ?>" oninput="this.value = this.value.toUpperCase()" placeholder="First Name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Middle Name</label>
                                                <div class="col-md-7">
                                                    <input type="text"  name="middleName" value="<?= $data->middleName; ?>" class="form-control" placeholder="Middle Name" oninput="this.value = this.value.toUpperCase()">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Last Name<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" required name="lastName" value="<?= $data->lastName; ?>" class="form-control" placeholder="Last Name" oninput="this.value = this.value.toUpperCase()">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Position<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <select name="position" class="form-control" required>
                                                        <option value="">Select Position</option>
                                                        <?php 
                                                        $pos = array(0 => 'Admin',1 => 'Learners',2 => 'School Focal',3 =>'Division Focal',4 =>'Regional Focal');
                                                        
                                                        foreach ($pos as $row => $key): ?>
                                                            <option <?= ($row == $data->position) ? 'selected' : '' ?> value="<?= $row; ?>"><?= $key; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">School<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <select name="school_id" class="form-control" data-toggle="select2" required>
                                                        <option value="">Select School</option>
                                                        <?php 
                                                        foreach ($school as $row): ?>
                                                            <option <?= ($row->school_id == $data->school_id) ? 'selected' : '' ?> value="<?= $row->school_id; ?>"><?= $row->schoolName; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

        
                                            
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Update
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <script>
                        function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                        var x = document.getElementById("myInput2");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                        }
                        </script>