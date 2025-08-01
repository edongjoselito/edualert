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
                                                        <a href="<?= base_url(); ?>" class="btn btn-sm btn-primary">Update</a>
                                                        <a href="#" class="btn btn-sm btn-warning">Change Status</a>
                                                        <a href="#" class="btn btn-sm btn-purple">View</a>
                                                        <a href="#" class="btn btn-sm btn-success">Remarks</a>
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


                        


                        