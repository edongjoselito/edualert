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
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/0" class="text-white"><span data-plugin="counterup"><?= $incident->num_rows(); ?></span></a></h2>
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
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/1" class="text-white"><span data-plugin="counterup"><?= $noaction->num_rows(); ?></a></span></h2>
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
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/1" class="text-white"><span data-plugin="counterup"><?= $noaction->num_rows(); ?></a></span></h2>
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
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/1" class="text-white"><span data-plugin="counterup"><?= $noaction->num_rows(); ?></a></span></h2>
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
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/1" class="text-white"><span data-plugin="counterup"><?= $noaction->num_rows(); ?></a></span></h2>
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
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/1" class="text-white"><span data-plugin="counterup"><?= $noaction->num_rows(); ?></a></span></h2>
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
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/1" class="text-white"><span data-plugin="counterup"><?= $noaction->num_rows(); ?></a></span></h2>
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
                                                <h2 class="my-0 text-white"><a href="<?= base_url(); ?>Pages/incident_list/0" class="text-white"><span data-plugin="counterup"><?= $action->num_rows(); ?></a></span></h2>
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

                    
                
