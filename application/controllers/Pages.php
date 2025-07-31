<?php


class Pages extends CI_Controller{
    public function __construct()
        {
            parent::__construct();
            $this->load->library('user_agent'); 
        }



    public function view(){
           if($this->session->position == 2){
            $page = "dashboard_school";
            $data['incident'] = $this->Page_model->one_cond_count('incident_report','school_id',$this->session->school_id);
            $data['newcase'] = $this->Page_model->two_cond_count('incident_report','school_id',$this->session->school_id,'ir_status',1);
            $data['ongoing'] = $this->Page_model->two_cond_count('incident_report','school_id',$this->session->school_id,'ir_status',2);
            $data['resolve'] = $this->Page_model->two_cond_count('incident_report','school_id',$this->session->school_id,'ir_status',3);
            $data['endorsed'] = $this->Page_model->two_cond_count('incident_report','school_id',$this->session->school_id,'ir_status',4);
            $data['terminate'] = $this->Page_model->two_cond_count('incident_report','school_id',$this->session->school_id,'ir_status',5);
            $data['tracing'] = $this->Page_model->two_cond_count('incident_report','school_id',$this->session->school_id,'ir_status',6);
            $data['monitor'] = $this->Page_model->two_cond_count('incident_report','school_id',$this->session->school_id,'ir_status',7);
            $ren = 'School';
           
            }elseif($this->session->position == 3){
            $page = "dashboard_division";
            $data['incident'] = $this->Page_model->one_cond_count('incident_report','division_id',$this->session->sdo_id);
            $data['newcase'] = $this->Page_model->two_cond_count('incident_report','division_id',$this->session->sdo_id,'ir_status',1);
            $data['ongoing'] = $this->Page_model->two_cond_count('incident_report','division_id',$this->session->sdo_id,'ir_status',2);
            $data['resolve'] = $this->Page_model->two_cond_count('incident_report','division_id',$this->session->sdo_id,'ir_status',3);
            $data['endorsed'] = $this->Page_model->two_cond_count('incident_report','division_id',$this->session->sdo_id,'ir_status',4);
            $data['terminate'] = $this->Page_model->two_cond_count('incident_report','division_id',$this->session->sdo_id,'ir_status',5);
            $data['tracing'] = $this->Page_model->two_cond_count('incident_report','division_id',$this->session->sdo_id,'ir_status',6);
            $data['monitor'] = $this->Page_model->two_cond_count('incident_report','division_id',$this->session->sdo_id,'ir_status',7);

            $data['school'] = $this->Page_model->two_join_no_cond_gb('incident_report', 'schools', 'a.school_id,b.school_id,b.schoolName','a.school_id = b.school_id','b.schoolName','ASC','b.schoolName');
            $ren = 'Division Focal';

           }elseif($this->session->position == 4){
            $data['incident'] = $this->Page_model->no_cond_count('incident_report');
            $data['newcase'] = $this->Page_model->one_cond_count('incident_report','ir_status',1);
            $data['ongoing'] = $this->Page_model->one_cond_count('incident_report','ir_status',2);
            $data['resolve'] = $this->Page_model->one_cond_count('incident_report','ir_status',3);
            $data['endorsed'] = $this->Page_model->one_cond_count('incident_report','ir_status',4);
            $data['terminate'] = $this->Page_model->one_cond_count('incident_report','ir_status',5);
            $data['tracing'] = $this->Page_model->one_cond_count('incident_report','ir_status',6);
            $data['monitor'] = $this->Page_model->one_cond_count('incident_report','ir_status',7);

            $data['region'] = $this->Page_model->one_cond('sdo','region_id',12);

            $page = "dashboard_region";
            $ren = 'Regional Focal';


           }else{
            $page = "dashboard";
             $ren = 'Admin';
           }


            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = $ren ." Dashboard"; 

            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/footer_basic');

    }

   public function tracking()
        {
            $this->load->view('pages/tracking');  // ✅ include folder name
     }

    public function homepage(){
          
            $page = "home";

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = "Homepage"; 

            $this->load->view('pages/'.$page, $data);

    }


    public function profilelist(){
        
        $page = "profile_list";

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title'] = "Profile List"; 

        $data['data'] = $this->Page_model->no_cond('profile');

        $this->load->view('templates/header_dt');
        $this->load->view('templates/menu');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footer_dt');
    }

    public function incident_list(){
        
        $page = "incident";

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title'] = "Incident List"; 

        $status = $this->uri->segment(3);
        $school_id = $this->session->school_id;

        if($this->session->position == 2){

        if ($status >= 1 && $status <= 7) {
            $data['data'] = $this->Page_model->two_cond('incident_report', 'school_id', $school_id, 'ir_status', $status);
        } else {
            $data['data'] = $this->Page_model->one_cond('incident_report', 'school_id', $school_id);
        }
        }elseif($this->session->position == 3){
            if ($status >= 1 && $status <= 7) {
                $data['data'] = $this->Page_model->two_cond('incident_report', 'division_id', $this->session->sdo_id, 'ir_status', $status);
            } else {
                $data['data'] = $this->Page_model->one_cond('incident_report', 'division_id', $this->session->sdo_id);
            }
        }else{
            if ($status >= 1 && $status <= 7) {
                $data['data'] = $this->Page_model->one_cond('incident_report', 'ir_status', $status);
            } else {
                $data['data'] = $this->Page_model->no_cond('incident_report');
            }

        }

        $this->load->view('templates/header_dt');
        $this->load->view('templates/menu');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footer_dt');

    }

    public function seek_help_list(){
        
        $page = "seekhelp";

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title'] = "Incident List"; 

        $status = $this->uri->segment(3);
        $school_id = $this->session->school_id;

        if($this->session->position == 2){

        if ($status >= 1 && $status <= 7) {
            $data['data'] = $this->Page_model->two_cond('seek_help', 'school_id', $school_id, 'sh_status', $status);
        } else {
            $data['data'] = $this->Page_model->one_cond('seek_help', 'school_id', $school_id);
        }
        }elseif($this->session->position == 3){
            if ($status >= 1 && $status <= 7) {
                $data['data'] = $this->Page_model->two_cond('seek_help', 'division_id', $this->session->sdo_id, 'sh_status', $status);
            } else {
                $data['data'] = $this->Page_model->one_cond('seek_help', 'division_id', $this->session->sdo_id);
            }
        }else{
            if ($status >= 1 && $status <= 7) {
                $data['data'] = $this->Page_model->one_cond('seek_help', 'sh_status', $status);
            } else {
                $data['data'] = $this->Page_model->no_cond('seek_help');
            }

        }

        $this->load->view('templates/header_dt');
        $this->load->view('templates/menu');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footer_dt');

    }
 

    public function profile_new(){

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>','</div>');
        $this->form_validation->set_rules('name', 'Fullname', 'required');

        if($this->form_validation->run() == FALSE){

        $page = "profile_add";

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = "New Entry"; 
           
            
            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/footer_basic');

         }else{
            $this->Page_model->profile_insert();
            $this->session->set_flashdata('success', 'Successfully saved.');
            redirect(base_url().'pages/profilelist');
            
        }    
    } 



// user settings area //

    public function userlist(){
        
        $page = "user_list";

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title'] = "User List"; 

        $data['users'] = $this->Page_model->no_cond('users');
        $data['school'] = $this->Page_model->no_cond('schools');

        $this->load->view('templates/header_dt');
        $this->load->view('templates/menu');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footer_dt');

    }

    public function user_new(){

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>','</div>');
        $this->form_validation->set_rules('email', 'Username', 'required');

        if($this->form_validation->run() == FALSE){

        $page = "user_add";

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = "New User"; 
            $data['school'] = $this->Page_model->no_cond('schools');
            $data['sdo'] = $this->Page_model->one_cond('sdo','region_id',12);
            
            $this->load->view('templates/header_select');
            $this->load->view('templates/menu');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/footer_select');

         }else{
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $username = $this->input->post('username');

            $config['allowed_types'] = 'jpg|png';
            $config['upload_path'] = './uploads/';
            $this->load->library('upload', $config);

            $this->upload->do_upload('file');
                $check = $this->Page_model->check_dup_user($fname,$lname,$username);
                if($check->num_rows() >= 1){
                    $this->session->set_flashdata('danger', 'Dubplicate Entry.');
                    redirect(base_url().'pages/user_new');
                }else{
                    $this->Page_model->user_insert();
                    $this->session->set_flashdata('success', 'Successfully saved.');
                    redirect(base_url().'pages/userlist');
                }
           
            
            
        }    
    } 
    public function user_update(){

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>','</div>');
        $this->form_validation->set_rules('firstName', 'First Name', 'required');

        if($this->form_validation->run() == FALSE){

        $page = "user_edit";

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = "Update User"; 
            $data['data'] = $this->Page_model->one_cond_row('users','user_id',$this->uri->segment(3));
            $data['school'] = $this->Page_model->no_cond('schools');
           
            
            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/footer_basic');

         }else{

            $this->Page_model->user_update();
            $this->session->set_flashdata('success', 'Successfully saved.');
            redirect(base_url().'pages/userlist');
        }    
    } 

    public function user_delete(){
            $id = $this->uri->segment(3);
            $user = $this->Page_model->one_cond_row('users','id',$id);
            $this->Page_model->delete_with_attach('users',$id,$user->image);
            $this->session->set_flashdata('danger', 'Successfully deleted.');
            redirect(base_url().'pages/userlist'); 
    } 

    public function cp(){
        $this->Page_model->user_pass();
        $this->session->set_flashdata('success', 'Successfully updated.');
        redirect(base_url().'pages/userlist');
      
    } 

    public function profile(){
        $id = $this->input->post('id');
        $user = $this->Page_model->one_cond_row('users','id',$id);
        $config['allowed_types'] = 'jpg|png';
        $config['upload_path'] = './uploads/';
        $this->load->library('upload', $config);

        if($this->upload->do_upload('file')){
            unlink("uploads/".$user->image);
            $this->Page_model->user_update_profile();
            $this->session->set_flashdata('success', 'Successfully updated.');
            redirect(base_url().'pages/userlist');
        }else{
            print_r($this->upload->display_errors()); 
        }
    }

public function incident_report()
{
    $this->form_validation->set_error_delimiters(
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>',
        '</div>'
    );

    $this->form_validation->set_rules('con', 'Incident', 'required');

    if ($this->form_validation->run() == FALSE) {

        $page = "confessions";

        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }

        $data['title'] = "Update User";
        $data['school'] = $this->Page_model->no_cond('schools');
        $data['sdo'] = $this->Page_model->one_cond('sdo', 'region_id', 12);

        $this->load->view('templates/header_public');
        $this->load->view('pages/' . $page, $data);

    } else {

        $tracking_no = $this->Page_model->report_insert();
        $recipient_email = $this->input->post('email');

        // ✅ Email configuration (optional if already set in config/email.php)
        $this->email->from('noreply@yourdomain.com', 'EduAlert System');
        $this->email->to($recipient_email);
        $this->email->subject('Your Incident Report Has Been Received');

        $message = "
        <h3>Thank you for submitting your incident report.</h3>
        <p>Your tracking number is:</p>
        <h2 style='color: red; text-align:center;'>$tracking_no</h2>
        <p>Please keep this number for future reference.</p>
        <br><small>This is an automated message. Do not reply.</small>";

        $this->email->message($message);

        if (!$this->email->send()) {
            log_message('error', 'Email failed to send to ' . $recipient_email);
        }

        // ✅ Flash success
        $this->session->set_flashdata('success',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <h5 class="alert-heading mb-1">✅ Incident Report Submitted Successfully!</h5>
                <p class="mb-0">Please take note of your <strong>Tracking Number</strong> below:</p>
                <h4 class="mt-2 mb-0 text-center text-danger"><strong>' . $tracking_no . '</strong></h4>
                <hr class="my-2">
                <p class="mb-0 text-muted">A confirmation email has been sent to <strong>' . $recipient_email . '</strong>.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );

        redirect($this->agent->referrer());
    }
}

    public function help()
{
    $this->form_validation->set_error_delimiters(
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>',
        '</div>'
    );

    $this->form_validation->set_rules('con', 'Incident', 'required');

    if ($this->form_validation->run() == FALSE) {

        $page = "seek_help";

        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }

        $data['title'] = "Seek Help";
        $data['school'] = $this->Page_model->no_cond('schools');
        $data['sdo'] = $this->Page_model->one_cond('sdo', 'region_id', 12);

        $this->load->view('templates/header_public');
        $this->load->view('pages/' . $page, $data);

    } else {

        $tracking_no = $this->Page_model->seek_help_insert();
        $recipient_email = $this->input->post('email');

        // ✅ Email configuration (optional if already set in config/email.php)
        $this->email->from('noreply@yourdomain.com', 'EduAlert System');
        $this->email->to($recipient_email);
        $this->email->subject('Your Incident Report Has Been Received');

        $message = "
        <h3>Thank you for submitting your incident report.</h3>
        <p>Your tracking number is:</p>
        <h2 style='color: red; text-align:center;'>$tracking_no</h2>
        <p>Please keep this number for future reference.</p>
        <br><small>This is an automated message. Do not reply.</small>";

        $this->email->message($message);

        if (!$this->email->send()) {
            log_message('error', 'Email failed to send to ' . $recipient_email);
        }

        // ✅ Flash success
        $this->session->set_flashdata('success',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <h5 class="alert-heading mb-1">✅ Incident Report Submitted Successfully!</h5>
                <p class="mb-0">Please take note of your <strong>Tracking Number</strong> below:</p>
                <h4 class="mt-2 mb-0 text-center text-danger"><strong>' . $tracking_no . '</strong></h4>
                <hr class="my-2">
                <p class="mb-0 text-muted">A confirmation email has been sent to <strong>' . $recipient_email . '</strong>.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );

        redirect($this->agent->referrer());
    }
}


    public function getSchoolsByDivision() {
    $division_id = $this->input->post('division_id');
    $schools = $this->Page_model->one_cond('schools', 'division_id', $division_id);

    echo '<option value="">Select School</option>';
    foreach($schools as $school){
        echo '<option value="'.$school->school_id.'">'.strtoupper($school->schoolName).'</option>';
    }
}

    public function log_in(){

        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if($this->form_validation->run() == FALSE){

            $page = "login";

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            
            $this->load->view('pages/'.$page);

            }else{

                $user_id = $this->Page_model->login(); 

                if($user_id){

                    $user_data = array(
                        'email' => $user_id['email'],
                        'position' => $user_id['position'],
                        'school_id' => $user_id['school_id'],
                        'sdo_id' => $user_id['sdo_id'],
                        'logged_in' => true

                    );
                
                    $this->session->set_userdata($user_data);
                    $this->session->set_flashdata('user_log', 'You are now loged in as '
                    .$this->session->position);
                    redirect(base_url());
                }else{
                    $this->session->set_flashdata('failed', 'Username/Password not match');
                    redirect(base_url().'log_in');

                }
  

            }
    } 
    public function lock_user_screen(){

        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('password', 'password', 'required');

        if($this->form_validation->run() == FALSE){

            $page = "lock_screen";

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            
            $this->load->view('pages/'.$page);

            }else{

                $user_id = $this->Page_model->lock_screen();

                if($user_id){

                    $user_data = array(
                        'email' => $user_id['email'],
                        'user' => $user_id['firstName'].' '.$user_id['middleName'].' '.$user_id['lastName'],
                        'position' => $user_id['position'],
                        'id' => $user_id['user_id'],
                        'logged_in' => true

                    );
                
                    $this->session->set_userdata($user_data);
                    $this->session->set_flashdata('user_log', 'You are now loged in as '
                    .$this->session->position);
                    redirect(base_url());
                }else{
                    $this->session->set_flashdata('failed', 'Password not match');
                    redirect(base_url().'lock_user_screen');

                }
  

            }
    } 
    public function logout(){

        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('position');
        $this->session->unset_userdata('office');
        $this->session->unset_userdata('logged_in');

        $this->session->set_flashdata('failed', 'You are logged out.');
        redirect(base_url());

    }
    public function lock(){
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('position');
        $this->session->unset_userdata('logged_in');

        $this->session->set_flashdata('danger', 'You are now Lock Screen Mode');
        redirect(base_url().'lock_user_screen');

    }

   
    

}

?>