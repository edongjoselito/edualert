
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        

        <div class="content-page" style="margin-left:0">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Incident Report</h4>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    

                    <?php if ($this->session->flashdata('success')) : ?>

                        <?= '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>'
                            . $this->session->flashdata('success') .
                            '</div>';
                        ?>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('danger')) : ?>
                        <?= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>'
                            . $this->session->flashdata('danger') .
                            '</div>';
                        ?>
                    <?php endif;  ?>
                    <!-- end page title -->

                    <?= validation_errors(); ?>
                    <?php $att = array('class' => 'parsley-examples'); ?>
                    <?= form_open('Pages/davor_confession', array_merge($att)); ?>




                    <!-- Form row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <br />
                                    <input type="hidden" valu="" name="renren">
                                    <input type="hidden" valu="" name="ivykate">
                                    <input type="hidden" valu="" name="ivankyle">
                                    <input type="hidden" valu="" name="ic">

                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <textarea class="form-control" rows="10" name="con" id="example-textarea" required></textarea>
                                        </div>

                                      
                                    </div>


                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="division">Division</label>
                                                <select id="division" name="division_id" class="form-control" required>
                                                    <option value="">Select Division</option>
                                                    <?php foreach($sdo as $row){ ?>
                                                        <option value="<?= $row->id; ?>"><?= $row->description; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="school">School Name</label>
                                                <select id="school" name="school" class="form-control" data-toggle="select2" required>
                                                    <option value="">Select School</option>
                                                    <!-- school options will be populated here by JS -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="division">First Name(Optional)</label>
                                                <input type="text" class="form-control" value="" name="firstName">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="school">Middle Name(Optional)</label>
                                                <input type="text" class="form-control" value="" name="middleName">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="school">Last Name(Optional)</label>
                                                <input type="text" class="form-control" value="" name="lastName">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <!-- <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="<?= trim($mis_settings->site_key); ?>"></div>
                                    </div> -->


                                    

                                    <br />
                                    <button type="submit" value="submit" class="btn" style="background:#800000">My Confession</button>

                                    </form>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->




                    <!-- end container-fluid -->

                </div>

                


                
                <!-- end content -->
                 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                 <script>
                                        function validateCaptcha(event) {
                                            var response = grecaptcha.getResponse();
                                            if (response.length == 0) {
                                                alert("Please verify that you are not a robot.");
                                                event.preventDefault(); // prevent form submission
                                                return false;
                                            }
                                        }
                                    </script>

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

<!-- Vendor js -->
<script src="<?= base_url(); ?>assets/js/vendor.min.js"></script>


<!-- Plugins Js -->
<script src="<?= base_url(); ?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/switchery/switchery.min.js"></script>

<script src="<?= base_url(); ?>assets/libs/select2/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<!-- Init js-->
<script src="<?= base_url(); ?>assets/js/pages/form-advanced.init.js"></script>

<!-- App js -->
<script src="<?= base_url(); ?>assets/js/app.min.js"></script>

<!-- App js -->
<script src="<?= base_url(); ?>assets/js/app.min.js"></script>

<script type="text/javascript">
                        $(document).on("click", ".open-AddBookDialog", function () {
                            var myBookId = $(this).data('id');
                            $(".modal-body #id").val( myBookId );
                        });
                        </script>

</body>
</html>