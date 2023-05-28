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
        // $this->session_data();
        // $this->load->model('add_student_model', 'asm');
        // $this->asm->create_student();
        $this->load->view('super_admin/add_student');       
    }

	public function save_student() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->asm->create_student();
        redirect("super_admin/add_student");    
    }
    
    // public function student_list() {
    //     $this->session_data();
    //     $this->load->model('add_student_model', 'asm');
    //     $this->load->view('super_admin/student_list');
    // }

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


    // office setup

    public function office_setup() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/branch_office_list');
    }


    public function company_list() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/company_list');
    }

    public function create_company() {
        $this->session_data();

        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->create_company();
    }

    public function update_company() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->update_company();
    }

    function company_delete($com_id) {
        $this->session_data();
        $com_id = $this->uri->segment(3);
        $this->db->where('com_id', $com_id);
        $this->db->delete('company_list');
        redirect("super_admin/company_list");
    }


    public function create_zonal_office() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->create_zonal_office();
    }

    public function zonal_office_list() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/zonal_office_list');
    }

    public function update_zonal_office() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->update_zonal_office();
    }

    function zonal_delete($zo_id) {
        $this->session_data();
        $zo_id = $this->uri->segment(3);
        $this->db->where('zo_id', $zo_id);
        $this->db->delete('zonal_office');
        redirect("super_admin/zonal_office_list");
    }

    public function create_branch_office() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->create_branch_office();
    }

    public function branch_list() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/branch_office_list');
    }

    public function update_branch_office() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->update_branch_office();
    }

    function branch_delete($br_id) {
        $this->session_data();
        $br_id = $this->uri->segment(3);
        $this->db->where('br_id', $br_id);
        $this->db->delete('branch_office');
        redirect("super_admin/branch_list");
    }

    
    // Pick Point Functions Starts
    public function create_pick_point() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->create_pick_point();
    }

    public function pick_point_list() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/pick_point_list');
    }

    public function update_pick_point() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->update_pick_point();
    }

    function pick_point_delete($pickpoint_id) {
        $this->session_data();
        $pickpoint_id = $this->uri->segment(3);
        $this->db->where('pickpoint_id', $pickpoint_id);
        $this->db->delete('pickpoint_office');
        redirect("super_admin/pick_point_list");
    }
    // Pick Point Functions Ends 


    public function create_bank_details() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->create_bank_details();
    }

    public function bank_details() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/bank_details_list');
    }

    public function update_bank_details() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->update_bank_details();
    }

    function bank_delete($b_id) {
        $this->session_data();
        $b_id = $this->uri->segment(3);
        $this->db->where('b_id', $b_id);
        $this->db->delete('bank_details');
        redirect("super_admin/bank_details");
    }

    public function bank_deposit_list() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/bank_deposit_list');
    }

    public function search_bank_deposit() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->osm->search_bank_deposit();
    }

    public function search_bank_deposit_list() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/search_bank_deposit_list');
    }


    //end of office setup

    // start zonal manager

    public function create_zonal_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/create_zonal_manager');
    }

    public function insert_zonal_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('order_management_model', 'omm');
        $this->load->model('office_setup_model', 'osm');
        $this->urm->create_zonal_manager();
    }

    public function zonal_manager_list() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/zonal_manager_list');
    }

    public function edit_zonal_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/edit_zonal_manager');
    }

    public function update_zonal_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->update_zonal_manager();
    }

    function delete_zonal_manager($cm_id, $path) {
        $this->session_data();
        $user_id = $this->uri->segment(3);
        $path = $this->uri->segment(4);
        $this->db->where('user_id', $user_id);
        $this->db->delete('zonal_manager');
        $this->db->where('user_name', $user_id);
        $this->db->delete('admin_user');
        if ($path != "default.png") {
            unlink(FCPATH . 'uploads/photos/' . $path);
        }
        redirect("super_admin/zonal_manager_list");
    }


    public function search_zonal_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->search_zonal_manager();
    }

    public function zonal_manager_list_search() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/zonal_manager_list_search');
    }

    //end of zonal manager



    // start branch manager

    public function create_branch_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/create_branch_manager');
    }

    public function insert_branch_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->create_branch_manager();
    }

    public function branch_manager_list() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/branch_manager_list');
    }

    public function edit_branch_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/edit_branch_manager');
    }

    public function update_branch_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->update_branch_manager();
    }

    function delete_branch_manager($zm_id, $path) {
        $this->session_data();
        $user_id = $this->uri->segment(3);
        $path = $this->uri->segment(4);
        $this->db->where('user_id', $user_id);
        $this->db->delete('branch_manager');
        $this->db->where('user_name', $user_id);
        $this->db->delete('admin_user');
        if ($path != "default.png") {
            unlink(FCPATH . 'uploads/photos/' . $path);
        }
        redirect("super_admin/branch_manager_list");
    }


    public function search_branch_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->search_branch_manager();
    }

    public function branch_manager_list_search() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/branch_manager_list_search');
    }

    //end of branch manager

    // start field worker

    public function create_field_worker() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/create_field_worker');
    }

    public function insert_field_worker() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('order_management_model', 'omm');
        $this->load->model('office_setup_model', 'osm');
        $this->urm->create_field_worker();
    }

    public function field_worker_list() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/field_worker_list');
    }

    public function field_worker_list_table() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->view('super_admin/field_worker_list_table');
    }

    public function fw_order_list() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->view('super_admin/fw_order_list');
    }


    public function edit_field_worker() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/edit_field_worker');
    }

    public function update_field_worker() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->update_field_worker();
    }

    function delete_field_worker($zm_id, $path) {
        $this->session_data();
        $user_id = $this->uri->segment(3);
        $path = $this->uri->segment(4);
        $this->db->where('user_id', $user_id);
        $this->db->delete('field_worker');
        $this->db->where('user_name', $user_id);
        $this->db->delete('admin_user');
        if ($path != "default.png") {
            unlink(FCPATH . 'uploads/photos/' . $path);
        }
        redirect("super_admin/field_worker_list");
    }


    public function search_field_worker() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->search_field_worker();
    }

    public function field_worker_list_search() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/field_worker_list_search');
    }

    public function get_branch_ajax() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');

        $zonal_code = $this->input->post('zonal_code');

        echo "<option value='' selected disabled hidden>Choose here</option>";
        foreach ($this->osm->get_branch_by_zone($zonal_code) as $row) {
            echo "<option value='$row->branch_code'>$row->branch_office</option>";
        }
    }

    public function get_branch_without_session_ajax() {
        $this->load->model('office_setup_model', 'osm');

        $zonal_code = $this->input->post('zonal_code');

        echo "<option value='' selected disabled hidden>Choose here</option>";
        foreach ($this->osm->get_branch_by_zone($zonal_code) as $row) {
            echo "<option value='$row->branch_code'>$row->branch_office</option>";
        }
    }

    public function get_pickpoint_ajax() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');

        $branch_code = $this->input->post('branch_code');

        echo "<option value='' selected disabled hidden>Choose here</option>";
        foreach ($this->osm->get_pickpoint_by_branch($branch_code) as $row) {
            echo "<option value='$row->pickpoint_code'>$row->pickpoint_office</option>";
        }
    }

    //end of field worker

    // start customer

    public function create_customer() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/create_customer');
    }

    public function insert_customer() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->create_customer();
    }

    public function customer_list() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/customer_list');
    }

    public function edit_customer() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/edit_customer');
    }

    public function update_customer() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->update_customer();
    }

    function delete_customer($cm_id, $path) {
        $this->session_data();
        $user_id = $this->uri->segment(3);
        $path = $this->uri->segment(4);
        $this->db->where('user_id', $user_id);
        $this->db->delete('customer');
        $this->db->where('user_name', $user_id);
        $this->db->delete('admin_user');
        if ($path != "default.png") {
            unlink(FCPATH . 'uploads/photos/' . $path);
        }
        redirect("super_admin/customer_list");
    }


    public function search_customer() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->search_customer();
    }

    public function customer_list_search() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/customer_list_search');
    }

    public function customer_profile() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/customer_profile');
    }

    public function customer_purchase() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->customer_purchase();
    }

    public function customer_purchase_view() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/customer_purchase_view');
    }

    public function cp_payment() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->cp_payment();
    }

    public function purchase_order_approved() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->urm->purchase_order_approved_admin();
    }

    //end of customer

    // start DISTRIBUTOR

    public function create_distributor() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/create_distributor');
    }

    public function insert_distributor() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->dmm->create_distributor();
    }

    public function create_dis_category() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');
        $this->dmm->create_dis_category();
    }

    public function distributor_list() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/distributor_list');
    }

    public function distributor_list_table() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/distributor_list_table');
    }

    public function distributor_stock_check() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('super_admin/distributor_stock_check');
    }

    public function edit_distributor() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/edit_distributor');
    }

    public function update_distributor() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->dmm->update_distributor();
    }

    function delete_distributor($dis_id) {
        $this->session_data();
        $dis_id = $this->uri->segment(3);
        $this->db->where('dis_id', $dis_id);
        $this->db->delete('distributor');
        redirect("super_admin/distributor_list");
    }


    public function search_distributor() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');
        $this->dmm->search_distributor();
    }

    public function distributor_list_search() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/distributor_list_search');
    }

    //END OF DISTRIBUTOR


    // start SUPPLIER

    public function create_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/create_supplier');
    }

    public function insert_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->create_supplier();
    }

    public function create_sup_category() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->create_sup_category();
    }

    public function supplier_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/supplier_list');
    }

    public function edit_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/edit_supplier');
    }

    public function update_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->update_supplier();
    }

    function delete_supplier($sup_id, $path) {
        $this->session_data();
        $sup_id = $this->uri->segment(3);
        $path = $this->uri->segment(4);
        $this->db->where('sup_id', $sup_id);
        $this->db->delete('supplier');
        unlink(FCPATH . 'uploads/photos/' . $path);
        redirect("super_admin/supplier_list");
    }


    public function search_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->search_supplier();
    }

    public function supplier_list_search() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/supplier_list_search');
    }

    //END OF SUPPLIER


    // START OF PRODUCT ENTRY

    public function create_pro_name() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->create_pro_name();
    }

    public function create_pro_brand() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->create_pro_brand();
    }

    public function create_measure() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->create_measure();
    }

    public function create_inventory() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/create_inventory');
    }

    public function insert_inventory() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->insert_inventory();
    }

    public function inventory_cart_delete() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->inventory_cart_delete();
    }

    public function inventory_submit() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->inventory_submit();
    }

    public function inventory_view() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/inventory_view');
    }

    public function create_pro_category() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->create_pro_category();
    }

    public function create_pro_sub_cat() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->create_pro_sub_cat();
    }

    public function inventory_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/inventory_list');
    }

    public function supplier_inventory_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/supplier_inventory_list');
    }

    public function deleteinventory() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->deleteinventory();
    }

    public function inventory_cart() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/inventory_cart');
    }
    
    public function inventory_checkout() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/inventory_checkout');
    }

    public function insert_inventory_checkout() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->insert_inventory_checkout();
    }

    public function delete_inventory_cart_item() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->delete_inventory_cart_item();
    }

    public function stock_check() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/stock_check');
    }

    public function deleteproduct() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->deleteproduct();
    }

    function deleteproductbyid() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->deleteproductbyid();
    }

    public function outof_stock_check() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/outof_stock_check');
    }

    public function deleteoutofstock() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->deleteoutofstock();
    }

    public function category_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/category_list');
    }

    public function pro_cat_delete() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->pro_cat_delete();
    }

    public function sub_category_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/sub_category_list');
    }

    public function sub_cat_delete() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->sub_cat_delete();
    }



    // END OF PRODUCT ENTRY


    // START OF ORDER

    public function create_order() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->view('super_admin/create_order');
    }


    public function insert_order() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->insert_order();
    }

    public function order_cart_delete() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_cart_delete();
    }

    public function order_submit() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_submit();
    }

    public function order_list() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/order_list');
    }
    public function order_view() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/order_view');
    }

    public function distributor_statement() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/distributor_statement');
    }

    public function order_list_pending() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/order_list_pending');
    }

    public function order_list_approved() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/order_list_approved');
    }

    public function order_list_reject() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/order_list_reject');
    }


    public function order_reject() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_reject();
    }

    public function order_approved() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_approved_super_admin();
    }

    public function order_view_update() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_view_update();
    }

    public function distribution_list() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/distribution_list');
    }

    public function admn_order_update() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->admn_order_update();
    }



    // END OF ORDER

    //sales list

    public function sales_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->model('order_management_model', 'omm');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('super_admin/sales_list');
    }
    public function sales_order_view() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/sales_order_view');
    }

    //end of sales list

    // START PURCHASE ORDER



    public function purchase_order() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/purchase_order');
    }

    public function insert_purchase_order() {
        $this->session_data();
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->po->insert_purchase_order();
    }

    public function purchase_order_delete() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->po->purchase_order_delete();
    }

    public function purchase_order_submit() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->po->purchase_order_submit();
    }

    public function purchase_order_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('super_admin/purchase_order_list');
    }
    public function purchase_order_view() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/purchase_order_view');
    }

    public function purchase_order_list_pending() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('super_admin/purchase_order_list_pending');
    }

    public function purchase_order_list_approved() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/purchase_order_list_approved');
    }

    public function purchase_order_list_reject() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/purchase_order_list_reject');
    }

    public function purchase_order_reject() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->po->purchase_order_reject();
    }



    public function purchase_order_view_update() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->po->purchase_order_view_update();
    }

    public function purchase_order_view_reject() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->po->purchase_order_view_reject();
    }

    public function purchase_order_view_approve() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->po->purchase_order_view_approve();
    }

    public function pro_category_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/category_list');
    }

    public function product_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/product_list');
    }

    public function check_product_unique_name_ajx() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');

        $pro_name = $this->input->post('pro_name');

        echo $this->imm->check_product_unique_name($pro_name);
    }

    public function check_product_unique_category_ajx() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');

        $pro_cat_name = $this->input->post('pro_cat_name');

        echo $this->imm->check_product_unique_category($pro_cat_name);
    }

    public function pro_brand_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/pro_brand_list');
    }

    public function check_product_brand_ajx() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');

        $pro_brand = $this->input->post('pro_brand');

        echo $this->imm->check_product_brand($pro_brand);
    }

    public function pro_brand_delete() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->pro_brand_delete();
    }

    public function pro_measure_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/pro_measure_list');
    }

    public function check_product_measure_ajx() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');

        $measure_name = $this->input->post('measure_name');

        echo $this->imm->check_product_measure($measure_name);
    }

    public function measure_delete() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->measure_delete();
    }

    public function supply_category() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/supply_category');
    }

    public function check_supply_category_ajx() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');

        $supc_name = $this->input->post('supc_name');

        echo $this->imm->check_supply_category($supc_name);
    }

    public function supply_category_delete() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->supply_category_delete();
    }

    public function unit_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/unit_list');
    }

    public function unit_delete() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->urm->unit_delete();
    }

    public function department_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/department_list');
    }

    public function department_delete() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->urm->department_delete();
    }

    public function profit_fact() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/profit_fact');
    }

    public function update_profile() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('super_admin/update_profile');
    }

    public function update_admin() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->urm->update_admin();
    }

    public function get_product_by_id_ajax() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');

        $pro_id = $this->input->post('pro_id');

        foreach ($this->imm->get_product_by_id($pro_id) as $row) {

            echo "<div class='form-group row'>
                <div class='col-md-6'>
                    <label for='pro_instock' class='col-md-12 col-form-label'>InStock</label>
                    <input class='form-control' type='number' name='pro_instock' id='pro_instock' value='$row->instock' readonly required>
                </div>
                <div class='col-md-6'>
                    <label for='pro_price' class='col-sm-12 col-form-label'>Price</label>
                    <input class='form-control' type='number' name='pro_price' id='pro_price' value='$row->sell_price' readonly required>
                </div>
            </div>

            <div class='form-group row'>
                <div class='col-md-6'>
                    <label for='purchase_qty' class='col-sm-12 col-form-label'>Quantity</label>
                    <input class='form-control' type='number' min='1' name='purchase_qty' id='purchase_qty' placeholder='Enter quantity' required>
                </div>
                <div class='col-md-6'>
                    <label for='purchase_total' class='col-sm-12 col-form-label'>Total Bill</label>
                    <input class='form-control' type='number' name='purchase_total' id='purchase_total' readonly required>
                </div>
            </div>

            <div class='form-group row'>
                <div class='col-md-6'>
                    <label for='down_payment' class='col-sm-12 col-form-label'>DOWN PAYMENT</label>
                    <input type='number' class='form-control' min='1' name='down_payment' id='down_payment' placeholder='DownPayment' required>
                </div>
                <div class='col-md-6'>
                    <label for='pay_due' class='col-sm-12 col-form-label'>Due</label>
                    <input type='number' class='form-control' name='pay_due' id='pay_due' readonly required>
                </div>
            </div>

            <div class='form-group row'>
                <div class='col-md-12'>
                    <label for='installment_plan' class='col-sm-6 col-form-label'>Installment Plan</label>
                    <select class='form-control' name='installment_plan' id='installment_plan'>
                        <option value='' selected='' disabled='' hidden=''>Choose here</option>
                        <option value='4'>4 Week</option>
                        <option value='16'>16 Week</option>
                        <option value='24'>24 Week</option>
                        <option value='36'>36 Week</option>
                    </select>
                </div>
            </div>

            <div class='form-group row'>
                <div class='col-md-6'>
                    <label for='per_installment' class='col-md-12 col-form-label'>Per Installment</label>
                    <input type='number' class='form-control' name='per_installment' id='per_installment' readonly>
                </div>
            </div>
            ";
        }
    }

    // <div class='col-md-6'>
    //     <label for='next_pay_date' class='col-md-12 col-form-label'>NEXT PAYMENT DATE</label>
    //     <input type='date' class='form-control' name='next_pay_date' placeholder='Next Installment Date'>
    // </div>
    
    public function get_customer_purchase_product_ajx() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');

        $cp_no = $this->input->post('cp_no');

        foreach ($this->imm->get_customer_purchase_product($cp_no) as $row) {
            echo "<div class='row'>
            <input type='hidden' name='cp_no' value='$row->cp_no'>
            <input type='hidden' name='cm_id_no' value='$row->cm_id_no'>
            <input type='hidden' name='fw_id_no' value='$row->fw_id_no'>
            <div class='col-md-3'>
                <div class='form-group'>
                    <label for='purchase_total' class='control-label'>Purchase</label>
                    <input type='number' class='form-control' id='purchase_total' value='$row->purchase_total' readonly>
                </div>
            </div>
            <div class='col-md-3'>
                <div class='form-group'>
                    <label for='down_payment' class='control-label'>Payment</label>
                    <input type='number' class='form-control' id='down_payment' value='$row->down_payment' readonly>
                </div>
            </div>
            <div class='col-md-3'>
                <div class='form-group'>
                    <label for='modal_pay_due' class='control-label'>Due</label>
                    <input type='number' class='form-control' id='modal_pay_due' name='pay_due' value='$row->pay_due' readonly>
                </div>
            </div>
            <div class='col-md-3'>
                <div class='form-group'>
                    <label for='installment_plan' class='control-label'>Instl. Plan</label>
                    <input type='text' class='form-control' id='installment_plan' value='$row->installment_plan week' readonly>
                </div>
            </div>
            <div class='col-md-3'>
                <div class='form-group'>
                    <label for='instl_given' class='control-label'>Instl. Given</label>
                    <input type='number' class='form-control' id='instl_given' value='$row->instl_given' readonly>
                </div>
            </div>
            <div class='col-md-3'>
                <div class='form-group'>
                    <label for='per_installment' class='control-label'>Per/Instl.</label>
                    <input type='number' class='form-control' id='per_installment' value='$row->per_installment' readonly>
                </div>
            </div>
            <div class='col-md-3'>
                <div class='form-group'>
                    <label for='pay_installment' class='control-label'>Pay Installment</label>
                    <input type='number' class='form-control' id='pay_installment' name='pay_installment' required>
                </div>
            </div>
        </div>
        <div class='modal-footer'>
            <button type='submit' class='btn btn-raised btn-primary ml-2'>Pay</button>
            <button type='button' class='btn btn-raised btn-danger' data-dismiss='modal'>Close</button>
        </div>
        ";
        }
    }
    
    // Product Requisition Starts
    public function product_requisition() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('super_admin/product_requisition');
    }

    function delete_product_requisition(){
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->delete_product_requisition();
    }

    // Product Requisition Ends
}

// <div class='col-md-3'>
//     <div class='form-group'>
//         <label for='next_payment_date' class='control-label'>Next Payment</label>
//         <input type='date' class='form-control' id='next_payment_date' name='next_payment_date' required>
//     </div>
// </div>



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
