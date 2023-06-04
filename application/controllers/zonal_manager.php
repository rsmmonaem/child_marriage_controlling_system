<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Zonal_manager extends CI_Controller {


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
            $this->load->view('zonal_manager/index');
        }
    }

    // office setup

    public function office_setup() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/zonal_office_list');
    }


    public function company_list() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/company_list');
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
        redirect("zonal_manager/company_list");
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
        $this->load->view('zonal_manager/zonal_office_list');
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
        redirect("zonal_manager/zonal_office_list");
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
        $this->load->view('zonal_manager/branch_office_list');
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
        redirect("zonal_manager/branch_list");
    }

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
        $this->load->view('zonal_manager/bank_details_list');
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
        redirect("zonal_manager/bank_details");
    }

    public function bank_deposit_list() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/bank_deposit_list');
    }


    //end of office setup

    // start zonal manager

    public function create_zonal_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/create_zonal_manager');
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
        $this->load->view('zonal_manager/zonal_manager_list');
    }

    public function edit_zonal_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/edit_zonal_manager');
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
        redirect("zonal_manager/zonal_manager_list");
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
        $this->load->view('zonal_manager/zonal_manager_list_search');
    }

    //end of zonal manager



    // start branch manager

    public function create_branch_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/create_branch_manager');
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
        $this->load->view('zonal_manager/branch_manager_list');
    }

    public function edit_branch_manager() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/edit_branch_manager');
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
        redirect("zonal_manager/branch_manager_list");
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
        $this->load->view('zonal_manager/branch_manager_list_search');
    }

    //end of branch manager

    // start field worker

    public function create_field_worker() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/create_field_worker');
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
        $this->load->view('zonal_manager/field_worker_list');
    }

    public function edit_field_worker() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/edit_field_worker');
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
        redirect("zonal_manager/field_worker_list");
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
        $this->load->view('zonal_manager/field_worker_list_search');
    }

    //end of field worker

    // start customer

    public function create_customer() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/create_customer');
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
        $this->load->view('zonal_manager/customer_list');
    }

    public function edit_customer() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/edit_customer');
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
        redirect("zonal_manager/customer_list");
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
        $this->load->view('zonal_manager/customer_list_search');
    }

    public function customer_profile() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/customer_profile');
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
        $this->load->view('zonal_manager/customer_purchase_view');
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
        $this->load->view('zonal_manager/create_distributor');
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
        $this->load->view('zonal_manager/distributor_list');
    }

    public function edit_distributor() {
        $this->session_data();
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/edit_distributor');
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
        redirect("zonal_manager/distributor_list");
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
        $this->load->view('zonal_manager/distributor_list_search');
    }

    //END OF DISTRIBUTOR


    // start SUPPLIER

    public function create_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/create_supplier');
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
        $this->load->view('zonal_manager/supplier_list');
    }

    public function edit_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/edit_supplier');
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
        redirect("zonal_manager/supplier_list");
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
        $this->load->view('zonal_manager/supplier_list_search');
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
        $this->load->view('zonal_manager/create_inventory');
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
        $this->load->view('zonal_manager/inventory_view');
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
        $this->load->view('zonal_manager/inventory_list');
    }

    public function supplier_inventory_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/supplier_inventory_list');
    }

    public function deleteinventory() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->deleteinventory();
    }

    public function stock_check() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/stock_check');
    }

    public function deleteproduct() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->imm->deleteproduct();
    }

    public function outof_stock_check() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/outof_stock_check');
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
        $this->load->view('zonal_manager/category_list');
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
        $this->load->view('zonal_manager/sub_category_list');
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
        $this->load->view('zonal_manager/create_order');
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
        $this->load->view('zonal_manager/order_list');
    }
    public function order_view() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/order_view');
    }

    public function distributor_statement() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/distributor_statement');
    }

    public function order_list_pending() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/order_list_pending');
    }

    public function order_list_approved() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/order_list_approved');
    }

    public function order_list_reject() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/order_list_reject');
    }


    public function order_reject() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_reject();
    }

    public function order_approved() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_approved_zonal_manager();
    }

    public function order_view_update() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_view_update();
    }

    public function distribution_list() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/distribution_list');
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
        $this->load->view('zonal_manager/sales_list');
    }
    public function sales_order_view() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('zonal_manager/sales_order_view');
    }

    //end of sales list

    // START PURCHASE ORDER



    public function purchase_order() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('zonal_manager/purchase_order');
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
        $this->load->view('zonal_manager/purchase_order_list');
    }
    public function purchase_order_view() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('zonal_manager/purchase_order_view');
    }

    public function purchase_order_list_pending() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('zonal_manager/purchase_order_list_pending');
    }

    public function purchase_order_list_approved() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('zonal_manager/purchase_order_list_approved');
    }

    public function purchase_order_list_reject() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('zonal_manager/purchase_order_list_reject');
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

    public function system_settings() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('zonal_manager/category_list');
    }

    public function pro_brand_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('zonal_manager/pro_brand_list');
    }

    public function pro_brand_delete() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->pro_brand_delete();
    }

    public function pro_measure_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('zonal_manager/pro_measure_list');
    }

    public function measure_delete() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->measure_delete();
    }

    public function unit_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->view('zonal_manager/unit_list');
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
        $this->load->view('zonal_manager/department_list');
    }

    public function department_delete() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->urm->department_delete();
    }
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
