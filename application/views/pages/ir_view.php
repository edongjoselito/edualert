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
                                        <h4 class="header-title mb-4">Incident Report</h4>
                                        <?php $dt = new DateTime($data->date_incident, new DateTimeZone('Asia/Manila')); ?>

                                        <div class="row">
                                                <div class="col-md-12">
                                                    <p><strong>Date of Report:</strong> <?= $dt->format('F j, Y'); ?><br />
                                                    <strong>Time of Report:</strong> <?= date('g:i A', strtotime($data->itime)); ?></p>

                                                    <p><strong>Name of Person Involved:</strong> <?= $data->?><br />
                                                    <strong>Position/Grade Level:</strong> Grade 10 – St. Peter<br />
                                                    <strong>Incident Type:</strong> Misconduct (Disrespectful behavior toward a teacher)<br />
                                                    <strong>Date and Time of Incident:</strong> October 5, 2025 – 9:30 AM<br />
                                                    <strong>Location:</strong> Classroom 10-B</p>      
                                                
                                                </div>
                                            </div>

                                    </div>

                                    <div class="card-body">
                                        <hr />
                                        <h4 class="header-title mb-4">Description of the Incident</h4>
                                        

                                        <div class="row">
                                                <div class="col-md-12">
                                                            <?= nl2br(htmlspecialchars($data->incident_details)); ?>
                                                </div>
                                            </div>

                                    </div>

                                    <div class="card-body">
                                        <hr />
                                        <h4 class="header-title mb-4">IMMEDIATE ACTION TAKEN</h4>
                                        

                                        <div class="row">
                                                <div class="col-md-12">
                                                            <?= nl2br(htmlspecialchars($data->incident_details)); ?>
                                                </div>
                                            </div>

                                    </div>

                                    <div class="card-body">
                                        <hr />
                                        <h4 class="header-title mb-4">RECOMMENDED ACTION</h4>
                                        

                                        <div class="row">
                                                <div class="col-md-12">
                                                            <?= nl2br(htmlspecialchars($data->incident_details)); ?>
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

                        

