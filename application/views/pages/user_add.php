                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">

                                    <div class="page-title-right">
                                        <ol class="breadcrumb p-0 m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>pages/userlist">Manage User</a></li>
                                            <li class="breadcrumb-item active">Add New User</li>
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
                                            echo form_open_multipart('pages/user_new', $attributes);
                                        ?>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-md-4 col-form-label">DepEd Email<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="email" required parsley-type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hori-pass1" class="col-md-4 col-form-label">Password<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input id="myInput" type="password" placeholder="Password" name="password"  required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hori-pass2" class="col-md-4 col-form-label">Confirm Password
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input id="myInput2" data-parsley-equalto="#myInput" type="password" name="cpassword" required placeholder="Password" class="form-control" id="hori-pass2">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-4">
                                                    <div class="checkbox checkbox-purple">
                                                        <input id="checkbox6" type="checkbox" onclick="myFunction()">
                                                        <label for="checkbox6">
                                                            Show Password
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">First Name<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" required class="form-control" name="firstName" placeholder="First Name" oninput="this.value = this.value.toUpperCase()">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Middle Name<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" name="middleName" class="form-control" placeholder="Middle Name" oninput="this.value = this.value.toUpperCase()">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Last Name<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" required name="lastName" class="form-control" placeholder="Last Name" oninput="this.value = this.value.toUpperCase()">
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
                                                            <option value="<?= $row; ?>"><?= $key; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Division<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <select id="division" name="sdo_id" class="form-control" data-toggle="select2" required>
                                                            <option value="">Select Division</option>
                                                            <?php foreach($sdo as $row){ ?>
                                                                <option value="<?= $row->id; ?>"><?= $row->description; ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">School<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <select id="school" name="school_id" class="form-control" data-toggle="select2" required>
                                                    <option value="">Select School</option>
                                                    <!-- school options will be populated here by JS -->
                                                    </select>
                                                </div>
                                            </div>

                                            

                                            <!-- <input type="hidden" name="sdo_id" value="61"> -->

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Profile Picture</label>
                                                <div class="col-md-7">
                                                    <input type="file" name="file" class="form-control" placeholder="Profile Picture">
                                                </div>
                                            </div>

                                            
                                            
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Register
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                                        Cancel
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

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                    $(document).ready(function(){
                                        $('#division').change(function(){
                                            var divisionID = $(this).val();
                                            if(divisionID != ''){
                                                $.ajax({
                                                    url: "<?= base_url('Pages/getSchoolsByDivision') ?>",
                                                    type: "POST",
                                                    data: { division_id: divisionID },
                                                    success: function(data){
                                                        $('#school').html(data);
                                                    }
                                                });
                                            } else {
                                                $('#school').html('<option value="">Select School</option>');
                                            }
                                        });
                                    });
                                    </script>

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

