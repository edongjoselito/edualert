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
                            

                            <div class="col-xl-3 col-sm-3">
                                <div class="card bg-primary">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/1" class="text-white"><span data-plugin="counterup"><?= $newcase->num_rows(); ?></span></a></h2>
                                                <p class="mb-0">New Case</p>
                                            </div>
                                            <i class="ion-md-open"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-3">
                                <div class="card bg-info">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/2" class="text-white"><span data-plugin="counterup"><?= $ongoing->num_rows(); ?></a></span></h2>
                                                <p class="mb-0">Ongoing Case</p>
                                            </div>
                                            <i class="ion-md-walk"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-3">
                                <div class="card bg-purple">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/3" class="text-white"><span data-plugin="counterup"><?= $resolve->num_rows(); ?></a></span></h2>
                                                <p class="mb-0">Resolved</p>
                                            </div>
                                            <i class="ion-md-eye-off"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-3">
                                <div class="card bg-success">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/4" class="text-white"><span data-plugin="counterup"><?= $endorsed->num_rows(); ?></a></span></h2>
                                                <p class="mb-0">Case Endorsed</p>
                                            </div>
                                            <i class="ion-ios-code-working"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-3">
                                <div class="card bg-warning">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/5" class="text-white"><span data-plugin="counterup"><?= $terminate->num_rows(); ?></a></span></h2>
                                                <p class="mb-0">Terminated</p>
                                            </div>
                                            <i class="ion-md-power"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-3">
                                <div class="card bg-purple">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/6" class="text-white"><span data-plugin="counterup"><?= $tracing->num_rows(); ?></a></span></h2>
                                                <p class="mb-0">For Tracing</p>
                                            </div>
                                            <i class="mdi mdi-comment-multiple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-3">
                                <div class="card bg-danger">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/7" class="text-white"><span data-plugin="counterup"><?= $monitor->num_rows(); ?></a></span></h2>
                                                <p class="mb-0">for Monitoring</p>
                                            </div>
                                            <i class="ion-md-eye"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-3">
                                <div class="card bg-dark">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/0" class="text-white"><span data-plugin="counterup"><?= $incident->num_rows(); ?></a></span></h2>
                                                <p class="mb-0">Total Incident</p>
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
                                                        <th>New Case</th> 
                                                        <th>Ongoing Case</th>
                                                        <th>Resolved</th>
                                                        <th>Case Endorsed</th>
                                                        <th>Terminated</th>
                                                        <th>For Tracing</th>
                                                        <th>for Monitoring</th>
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
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    
                
