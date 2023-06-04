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
        // $this->load->model('requisition_model', 'rm');
        // $this->load->model('purchase_order_model', 'po');
        $this->load->library('session');
        // if (!$this->session->userdata('user_name')) {
        //     redirect("login");
        // }
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
            $this->load->view('institute_admin/index');
        }
    }

//add_institute


    public function add_institute() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        // $this->load->model('order_management_model', 'omm');
        $this->aim->create_institute();

        $this->load->view('institute_admin/add_institute');
       
    }
	

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
        // $this->load->model('add_student_model', 'asm');
        // // $this->asm->create_student();
        $this->load->view('institute_admin/add_student');       
    }

	public function save_student() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->asm->create_student();
		redirect("institute_admin/add_student");
    }
    
    public function student_list() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->load->view('institute_admin/student_list');
    }

    public function edit_student($id) {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
		$data['data'] = $this->asm->get_student_row($id);
        $this->load->view('institute_admin/edit_student', $data);

    }

        public function update_student() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->asm->update_student();
        redirect("institute_admin/student_list","refresh");
    }
    
    
 
}

