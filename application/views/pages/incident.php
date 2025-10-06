                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <!-- <a class="btn btn-success" href="<?= base_url(); ?>pages/profile_new">Add New</a> -->
                                    

                                
                                    <div class="clearfix"></div>

                                    <?php if($this->session->flashdata('success')) : ?>

                                        <?= '<br /><div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>'
                                                .$this->session->flashdata('success'). 
                                            '</div>'; 
                                        ?>
                                        <?php endif; ?>

                                        <?php if($this->session->flashdata('danger')) : ?>
                                        <?= '<br /><div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>'
                                                .$this->session->flashdata('danger'). 
                                            '</div>'; 
                                        ?>
                                        <?php endif;  ?>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                       <!-- ============================================================== -->
                       <!-- Main Content here -->
                       <!-- ============================================================== -->
                        <?php 
                                    $pos = array(
                                        1 => 'New Case', 
                                        2 => 'Ongoing Case', 
                                        3 => 'Resolved', 
                                        4 => 'Case Endorsed', 
                                        5 => 'Terminated', 
                                        6 => 'For Tracing', 
                                        7 => 'for Monitoring'
                                    );
                        ?>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <h4 class="m-t-0 header-title mb-4"><?= $title; ?></h4>

                                        <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                                <tr>
                                                    <th>incident_details</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach($data as $row){?>
                                                <tr>
                                                    <td><?= $this->Page_model->limit_words($row->incident_details, 10); ?></td>
                                                    <td><span class="badge badge-info"><?= $pos[$row->ir_status]; ?></span></td>
                                                    <td>
                                                        <a href="<?= base_url(); ?>Pages/incident_process/<?= $row->ir_id; ?>/<?= $this->uri->segment(3); ?>" class="btn btn-sm btn-primary">Update</a>
                                                        <a href="#" class="btn btn-sm btn-purple">View</a>
                                                        <?php if($this->session->position == 1){ ?>
                                                            <!-- <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#renren_guapo">Action</a> -->
                                                            <a href="#" class="btn btn-sm btn-warning">Change Status</a>
                                                        <?php } ?>

                                                        <?php if($row->ir_status == 2){ ?>
                                                            <a href="#" class="btn btn-sm btn-warning open-AddBookDialog" data-toggle="modal" data-id="<?= $row->ir_id; ?>" data-target="#renren_guapo">Case Endorse</a>

                                                        <?php } ?>
                                                        
                                                        <a href="#" class="btn btn-sm btn-success">Remarks</a>
                                                        <a href="#" class="btn btn-sm btn-success">tag</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <!-- sample modal content -->
                                        <div id="renren_guapo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myModalLabel">Case Endorse</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php 
                                                            $attributes = array('class' => 'parsley-examples');
                                                            echo form_open('pages/ir_endorsed', $attributes);
                                                        ?>
                                                        <input type="hidden" id="id" />
                                                        <div class="form-group">
                                                            <label class="form-label" for="example-textarea">Agencies</label>
                                                            <select class="form-control" name="agencies">
                                                                    <option></option>
                                                                    <option value="Guidance Office">Guidance Office</option>
                                                                    <option value="School Principal">School Principal</option>
                                                                    <option value="Discipline Committee">Discipline Committee</option>
                                                                    <option value="Barangay Office">Barangay Office</option>
                                                                    <option value="Philippine National Police (PNP)">Philippine National Police (PNP)</option>
                                                                    <option value="PNP Women and Children Protection Desk (WCPD)">PNP Women and Children Protection Desk (WCPD)</option>
                                                                    <option value="DSWD">Department of Social Welfare and Development (DSWD)</option>
                                                                    <option value="DepEd Division Office">DepEd Division Office</option>
                                                                    <option value="Commission on Human Rights (CHR)">Commission on Human Rights (CHR)</option>
                                                                    <option value="PDEA">Philippine Drug Enforcement Agency (PDEA)</option>
                                                                    <option value="NBI">National Bureau of Investigation (NBI)</option>
                                                                    <option value="Legal Affairs Office">Legal Affairs Office</option>
                                                                    <option value="Human Resource Office">Human Resource Office</option>
                                                                    <option value="Office of the Ombudsman">Office of the Ombudsman</option>
                                                                    <option value="Mental Health Program - DOH">Mental Health Program - DOH</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label" for="example-textarea">Remarks</label>
                                                            <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                                                    </div>
                                                    </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->

                                        <script type="text/javascript">
                                            $(document).on("click", ".open-AddBookDialog", function () {
                                                var id = $(this).data('id');
                                                $(".modal-body #id").val( id );


                                                });
                                        </script>


                        


                        