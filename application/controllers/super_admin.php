<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin extends CI_Controller {


    function __construct() {
        parent::__construct();

        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }


    public function session_data() {
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->library('session');
        if (!$this->session->userdata('user_name')) {
            redirect("login");
        }
    }


    public function index() {

        $this->load->library('session');
        if (!$this->session->userdata('user_name')) {
            redirect("login");
        } else {
            $this->load->model('requisition_model', 'rm');
            $this->load->model('purchase_order_model', 'po');
            $this->load->model('purchase_model', 'pm');
            $this->load->model('purchase_order_model', 'po');
            $this->load->model('order_management_model', 'omm');
            $this->load->model('user_registration_model', 'urm');
            $this->load->view('super_admin/index');
        }
    }

//add_institute


    public function add_institute() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        // $this->load->model('order_management_model', 'omm');
        $this->aim->create_institute();

        $this->load->view('super_admin/add_institute');
        
        
    }

    public function institute_list() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        // $this->load->model('office_setup_model', 'osm');
        $this->load->view('super_admin/institute_list');
    }

    public function edit_institute($id) {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        $data['data'] = $this->aim->get_institute_id('institute',$id);
        $this->load->view('super_admin/institute_edit', $data);

    }

        public function update_institute() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        $this->aim->update_institute();
        redirect("super_admin/institute_list","refresh");
    }

    function institute_delete($inst_id) {
        $this->session_data();
        $inst_id  = $this->uri->segment(3);
        $this->db->where('inst_id', $inst_id );
        $this->db->delete('institute');
        redirect("super_admin/institute_list");
    }





//    Add Notice

    public function add_notice() {
        $this->session_data();
        $this->load->model('add_notice_model', 'anm');
        $this->anm->create_notice();
        $this->load->view('super_admin/add_notice');       
    }
    
    public function notice_list() {
        $this->session_data();
        $this->load->model('add_notice_model', 'anm');
        // $this->load->model('office_setup_model', 'osm');
        $this->load->view('super_admin/notice_list');
    }

    public function edit_notice($id) {
        $this->session_data();
        $this->load->model('add_notice_model', 'anm');
        $data['data'] = $this->anm->get_notice_id('notice',$id);
        $this->load->view('super_admin/notice_edit', $data);

    }


    public function update_notice() {
        $this->session_data();
        $this->load->model('add_notice_model', 'anm');
        $this->anm->update_notice();
        redirect("super_admin/notice_list");
    }

    public function notice_delete($not_id) {
        $this->session_data();
        $not_id  = $this->uri->segment(3);
        $this->db->where('not_id', $not_id );
        $this->db->delete('notice');
        redirect("super_admin/notice_list");
    }


//    Add Studentes

public function add_student() {
	$this->session_data();
	$this->load->model('add_institute_model', 'aim');
	// $this->load->model('add_student_model', 'asm');
	// // $this->asm->create_student();
	$this->load->view('super_admin/add_student');       
}

public function save_student() {
	$this->session_data();
	$this->load->model('add_student_model', 'asm');
	$this->asm->create_student();
	redirect("super_admin/add_student");
}

public function student_list() {
	$this->session_data();
	$this->load->model('add_student_model', 'asm');
	$this->load->view('super_admin/student_list');
}

public function edit_student($id) {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
		$data['data'] = $this->asm->get_student_row($id);
        $this->load->view('super_admin/edit_student', $data);

}

	public function update_student() {
	$this->session_data();
	$this->load->model('add_student_model', 'asm');
	$this->asm->update_student();
	redirect("super_admin/student_list","refresh");
}


public function add_non_student() {
	$this->session_data();
	$this->load->view('super_admin/add_non_student');       
}

public function save_non_student() {
	$this->session_data();
	$this->load->model('add_non_student_model', 'asnm');
	$this->asnm->create_non_student();
	redirect("super_admin/add_non_student");
	
}

public function non_student_list() {
	$this->session_data();
	$this->load->model('add_non_student_model', 'ansm');
	$this->load->view('super_admin/non_student_list');
}

public function edit_non_student($id) {
        $this->session_data();
        $this->load->model('add_non_student_model', 'ansm');
		$data['data'] = $this->ansm->get_non_student_row($id);
        $this->load->view('super_admin/edit_non_student', $data);

}

	public function update_non_student() {
	$this->session_data();
	$this->load->model('add_non_student_model', 'ansm');
	$this->ansm->update_non_student();
	redirect("super_admin/non_student_list","refresh");
}
function non_student_delete($non_st_id) {
	$this->session_data();
	$news_id = $this->uri->segment(3);
	$this->db->where('non_st_id', $non_st_id);
	$this->db->delete('non_student');
	redirect("super_admin/non_student_list");
}

   
    //End Non Student

	//News
    public function create_news() {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        $this->anm->create_news();
        $this->load->view('super_admin/create_news');
    }

    public function news_list() {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        // $this->anm->get_news();
        $this->load->view('super_admin/news_list');
    }

  public function edit_news($id) {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        $data['data'] = $this->anm->get_news_id('news',$id);
        $this->load->view('super_admin/edit_news', $data);

    }

    public function update_news() {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        $this->anm->update_news();
        redirect("super_admin/news_list");
    }

    function news_delete($news_id) {
        $this->session_data();
        $news_id = $this->uri->segment(3);
        $this->db->where('news_id', $news_id);
        $this->db->delete('news');
        redirect("super_admin/news_list");
    } 


    //End News
    // public function edit_notice($id) {
    //     $this->session_data();
    //     $this->load->model('add_student_model', 'asm');
    //     $data['data'] = $this->anm->get_student_id('student',$id);
    //     $this->load->view('super_admin/student_edit', $data);

    // }


    // public function update_student() {
    //     $this->session_data();
    //     $this->load->model('add_student_model', 'asm');
    //     $this->asm->update_student();
    //     redirect("super_admin/student_list");
    // }

    // public function student_delete($not_id) {
    //     $this->session_data();
    //     $not_id  = $this->uri->segment(3);
    //     $this->db->where('st_id', $not_id );
    //     $this->db->delete('student');
    //     redirect("super_admin/student_list");
    // }



    // Add Purohit

    public function add_purohit(){
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $this->apm->create_purohit();
        $this->load->view('super_admin/add_purohit');
    }

    public function purohit_list() {
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $this->apm->get_purohit();
        $this->load->view('super_admin/purohit_list');
    }

    function purohit_delete($purohit_id) {
        $this->session_data();
        $news_id = $this->uri->segment(3);
        $this->db->where('purohit_id', $purohit_id);
        $this->db->delete('purohit');
        redirect("super_admin/purohit_list");
    }

    public function edit_purohit($id) {
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $data['data'] = $this->apm->get_purohit_id('purohit',$id);
        $this->load->view('super_admin/edit_purohit', $data);

    }

    public function update_purohit() {
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $this->apm->update_purohit();
        redirect("super_admin/purohit_list");
    }

    //End Purohit


    // Add Kazi

    public function add_kazi(){
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $this->akm->create_kazi();
        $this->load->view('super_admin/add_kazi');
    }

    public function kazi_list() {
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $this->akm->get_kazi();
        $this->load->view('super_admin/kazi_list');
    }

    function kazi_delete($kazi_id) {
        $this->session_data();
        $kazi_id = $this->uri->segment(3);
        $this->db->where('kazi_id', $kazi_id);
        $this->db->delete('kazi');
        redirect("super_admin/kazi_list");
    }

     public function edit_kazi($id) {
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $data['data'] = $this->akm->get_kazi_id('kazi',$id);
        $this->load->view('super_admin/edit_kazi', $data);

    }

    public function update_kazi() {
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $this->akm->update_kazi();
        redirect("super_admin/kazi_list");
    }
    //End Kazi

    // Add Imam

    public function add_imam(){
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $this->aim->create_imam();
        $this->load->view('super_admin/add_imam');
    }

    public function imam_list() {
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $this->aim->get_imam();
        $this->load->view('super_admin/imam_list');
    }

    function imam_delete($imam_id) {
        $this->session_data();
        $imam_id = $this->uri->segment(3);
        $this->db->where('imam_id', $imam_id);
        $this->db->delete('imam');
        redirect("super_admin/imam_list");
    }

    public function edit_imam($id) {
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $data['data'] = $this->aim->get_imam_id('imam',$id);
        $this->load->view('super_admin/edit_imam', $data);

    }

    public function update_imam() {
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $this->aim->update_imam();
        redirect("super_admin/imam_list");
    }

    //End Imam

    //Mosque Start
    public function add_mosque(){
        $this->session_data();
        $this->load->model('add_mosque_model', 'amm');
        $this->amm->create_mosque();
        $this->load->view('super_admin/add_mosque');
    }
    public function mosque_list() {
        $this->session_data();
        $this->load->model('add_mosque_model', 'amm');
        $this->amm->get_mosque();
        $this->load->view('super_admin/mosque_list');
    }

    function mosque_delete($mosque_id) {
        $this->session_data();
        $mosque_id = $this->uri->segment(3);
        $this->db->where('mosque_id', $mosque_id);
        $this->db->delete('mosque');
        redirect("super_admin/mosque_list");
    }

    public function edit_mosque($id) {
        $this->session_data();
        $this->load->model('add_mosque_model', 'amm');
        $data['data'] = $this->amm->get_mosque_id('mosque',$id);
        $this->load->view('super_admin/edit_mosque', $data);

    }
    public function update_mosque(){
        $this->session_data();
        $this->load->model('add_mosque_model', 'amm');
        $this->amm->update_mosque();
        redirect("super_admin/mosque_list");
    }

    //End Mosque

    //Temple Start
    public function add_temple(){
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $this->atmb->create_temple();
        $this->load->view('super_admin/add_temple');
    }
    public function temple_list() {
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $this->atmb->get_temple();
        $this->load->view('super_admin/temple_list');
    }

    function temple_delete($temple_id) {
        $this->session_data();
        $temple_id = $this->uri->segment(3);
        $this->db->where('temple_id', $temple_id);
        $this->db->delete('temple');
        redirect("super_admin/temple_list");
    }

    public function edit_temple($id) {
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $data['data'] = $this->atmb->get_temple_id('temple',$id);
        $this->load->view('super_admin/edit_temple', $data);

    }

    public function update_temple(){
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $this->atmb->update_temple();
        redirect("super_admin/temple_list");
    }

    //End Temple

    //Guardian List
    public function guardian_list() {
        $this->session_data();
        $this->load->model('guardian_model', 'gm');
        $this->gm->get_guardian();
        $this->load->view('super_admin/guardian_list');
    }

    //    Add Law/Regulations
    public function add_law_regulation(){
        $this->session_data();   
		$this->load->view('super_admin/add_law_regulation');    
    }

    public function save_law_regulation() {
        $this->session_data();
        $this->load->model('add_law_regulation_model', 'alrm');
        $this->alrm->create_law_regulation();        
    }
    
    public function law_regulation_list() {
        
        $this->session_data();
        $this->load->model('add_law_regulation_model', 'alrm');
		//  $this->alrm->get_law_regulation();
        $this->load->view('super_admin/law_regulation_list');
    }

    public function edit_law_regulation($id) {
        $this->session_data();
        $this->load->model('add_law_regulation_model', 'alrm');
        $data['data'] = $this->alrm->get_law_regulation_id('law_regulation',$id);
        $this->load->view('super_admin/edit_law_regulation', $data);

    }


    // public function update_law_regulation() {
    //     $this->session_data();
    //     $this->load->model('add_law_regulation_model', 'alrm');
    //     $this->alrm->update_law_regulation();
    //     redirect("super_admin/law_regulation_list");
    // }

    // public function law_regulation_delete($law_regulation_id) {
    //     $this->session_data();
    //     $law_regulation_id  = $this->uri->segment(3);
    //     $this->db->where('law_regulation_id', $law_regulation_id );
    //     $this->db->delete('law_regulation');
    //     redirect("super_admin/law_regulation_list");
    // }



}




