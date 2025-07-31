                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title"><?= $title; ?></h4>
                                   
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            

                            <div class="col-xl-4 col-sm-4">
                                <div class="card bg-info">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/0" class="text-white"><span data-plugin="counterup"><?= $incident->num_rows(); ?></span></a></h2>
                                                <p class="mb-0">Total Incident Report</p>
                                            </div>
                                            <i class="ion-ios-pricetag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-4">
                                <div class="card bg-info">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/1" class="text-white"><span data-plugin="counterup"><?= $noaction->num_rows(); ?></a></span></h2>
                                                <p class="mb-0">Total Incident with action</p>
                                            </div>
                                            <i class="ion-ios-pricetag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-4">
                                <div class="card bg-success">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/0" class="text-white"><span data-plugin="counterup"><?= $action->num_rows(); ?></a></span></h2>
                                                <p class="mb-0">Total Incident no action</p>
                                            </div>
                                            <i class="mdi mdi-comment-multiple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                         
                        </div>
                        <!-- End row -->

                        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">List of School</h4>

                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>School Name</th>
                                                        <th>Incident</th>
                                                        <th>No Action</th>
                                                        <th>Resolved</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $c=1; foreach($school as $row){
                                                        $incident = $this->Page_model->one_cond_count('incident_report','school_id',$row->school_id);
                                                        $action = $this->Page_model->two_cond_count('incident_report','school_id',$row->school_id,'ir_status',1);
                                                        $noaction = $this->Page_model->two_cond_count('incident_report','school_id',$row->school_id,'ir_status',0);
                                                    ?>

                                                    <tr>
                                                        <th scope="row"><?= $c++; ?></th>
                                                        <td><?= strtoupper($row->schoolName); ?></td>
                                                        <td><?= $incident->num_rows(); ?></td>
                                                        <td><?= $action->num_rows(); ?></td>
                                                        <td><?= $noaction->num_rows(); ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    
                
