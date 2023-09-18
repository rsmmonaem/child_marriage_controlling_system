<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class institute_admin extends CI_Controller {


    function __construct() {
        parent::__construct();

        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }


    public function session_data() {
        $this->load->model('user_modification_model', 'umm');
        $this->load->library('session');
		if (!$this->session->userdata('user_name')) {
			redirect("login");
		}
    }


    public function index() {

        $this->load->library('session');
        $this->session_data();
        if (!$this->session->userdata('user_name')) {
            redirect("login");
        } else {
            $this->load->model('user_registration_model', 'urm');
            $user = $this->session->userdata('user_name');
            $this->db->where('who_add', $user);
            $this->db->where('student_type', 'student');
            $student_filter = $this->db->get('student');
            $data['data'] =  $student_filter->result();

            $this->load->view('institute_admin/index', $data);
        }
    }



//    public function add_institute() {
//        $this->session_data();
//        $this->load->model('add_institute_model', 'aim');
//        // $this->load->model('order_management_model', 'omm');
//        $this->aim->create_institute();
//
//        $this->load->view('institute_admin/add_institute');
//
//    }
	

    public function institute_list() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        // $this->load->model('office_setup_model', 'osm');
        $this->load->view('institute_admin/institute_list');
    }

    public function edit_institute($id) {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        $data['data'] = $this->aim->get_institute_id('institute',$id);
        $this->load->view('institute_admin/institute_edit', $data);

    }

        public function update_institute() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        $this->aim->update_institute();
        redirect("institute_admin/institute_list","refresh");
    }

    function institute_delete($inst_id) {
        $this->session_data();
        $inst_id  = $this->uri->segment(3);
        $this->db->where('inst_id', $inst_id );
        $this->db->delete('institute');
        redirect("institute_admin/institute_list");
    }




//    Add Studentes

    public function add_student() {
        $this->session_data();
		$this->load->model('add_institute_model', 'aim');
        $this->load->view('institute_admin/add_student');       
    }


    public function save_student() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->asm->create_student();
        redirect("institute_admin/add_student");
        $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Created successfully.</div>');
    }
    public function student_list() {
        $this->session_data();
        $user = $this->session->userdata('user_name');
        $this->db->where('who_add', $user);
        $this->db->where('student_type', 'student');
        $student_filter = $this->db->get('student');
        $data['data'] =  $student_filter->result();
        $this->load->view('institute_admin/student_list',$data);
    }

    public function student_list_dasboard() {
        $this->session_data();
        $user = $this->session->userdata('user_name');
        $this->db->where('who_add', $user);
        $this->db->where('student_type', 'student');
        $student_filter = $this->db->get('student');
        $data['data'] =  $student_filter->result();
        $this->load->view('institute_admin/student_list',$data);
    }

    public function edit_student($id) {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
	
		$data['student'] = $this->asm->get_student_id('student',$id);
        $data['parents_info'] = $this->asm->parents_info_id('parents_info',$id);
        $data['guardian_info'] = $this->asm->guardian_info_id('guardian_info',$id);
        $this->load->view('institute_admin/edit_student', $data);

    }

        public function update_student() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->asm->update_student();
        redirect("institute_admin/student_list","refresh");
    }

    public function edit_profile(){
        $this->session_data();
        $this->load->view('institute_admin/edit_profile');
    }
    public function update_profile(){
        $this->session_data();
        $this->load->model('profile_update_model', 'pum');
        $this->pum->update_profile_inst();
        redirect("institute_admin/edit_profile");
    }
//    public function guardian_list() {
//        $this->session_data();
//        $this->load->model('guardian_model', 'gm');
//        $this->gm->get_guardian();
//        $this->load->view('institute_admin/guardian_list');
//    }

    public function guardian_list() {
        $this->session_data();
        $user = $this->session->userdata('user_name');
        $this->db->where('who_add_guardian', $user);
        $student_filter = $this->db->get('guardian_info');
        $data['data'] =  $student_filter->result();
        $this->load->view('institute_admin/guardian_list',$data);
    }





}

