<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Field_worker extends CI_Controller {


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
            $this->load->model('order_management_model', 'omm');
            $this->load->model('user_registration_model', 'urm');
            // $this->load->view('field_worker/order_list');
            $this->load->view('field_worker/index');
        }
    }

    // office setup
    public function bank_details() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/bank_details_list');
    }

    public function bank_deposit() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->osm->bank_deposit();
    }

    public function bank_deposit_dis() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->osm->bank_deposit_dis();
    }

    public function bank_deposit_list() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->view('field_worker/bank_deposit_list');
    }
    // end of office setup


    // start field worker
    public function edit_field_worker() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->view('field_worker/edit_field_worker');
    }

    public function update_field_worker() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->urm->update_field_worker();
    }

    public function update_field_worker_panel() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->urm->update_field_worker_panel();
    }
    // end of field worker

    // start customer
    public function create_customer() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/create_customer');
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
        $this->load->view('field_worker/customer_list');
    }

    public function edit_customer() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/edit_customer');
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
        redirect("field_worker/customer_list");
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
        $this->load->view('field_worker/customer_list_search');
    }

    public function customer_profile() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/customer_profile');
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
        $this->load->view('field_worker/customer_purchase_view');
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


    public function update_profile() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->view('field_worker/update_profile');
    }
    //end of Common Users/Employee

    // START OF PRODUCT ENTRY
    public function stock_check() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/stock_check');
    }

    public function outof_stock_check() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/outof_stock_check');
    }
    // END OF PRODUCT ENTRY


    // START OF REQUISITION
    public function distribution_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->view('field_worker/distribution_list');
    }
    // END OF REQUISITION

    // START OF ORDER
    public function create_order() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->view('field_worker/create_order');
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
        $this->load->view('field_worker/order_list');
    }
    public function order_view() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/order_view');
    }

    public function distributor_statement() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/distributor_statement');
    }

    public function order_list_pending() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/order_list_pending');
    }

    public function order_list_approved() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/order_list_approved');
    }

    public function order_list_reject() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/order_list_reject');
    }

    public function order_reject() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_reject();
    }

    public function order_approved() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_approved_field_worker();
    }

    public function order_view_update() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_view_update();
    }

    public function distribution_list2() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/distribution_list');
    }
    // END OF ORDER

    // START SALES ORDER
    public function create_sales() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('field_worker/create_sales');
    }

    public function insert_sales_order() {
        $this->session_data();
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->model('order_management_model', 'omm');
        $this->load->model('sales_order_model', 'som');

        $this->som->insert_sales_order();
    }

    public function sales_order_delete() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'po');
        $this->po->sales_order_delete();
    }

    public function sales_order_submit() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->model('order_management_model', 'omm');
        $this->som->sales_order_submit();
    }

    public function sales_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->view('field_worker/sales_list');
    }

    public function product_sales_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->model('user_registration_model', 'urm');
        $this->load->view('field_worker/product_sales_list');
    }

    public function installment_collection() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->model('user_registration_model', 'urm');
        $this->load->view('field_worker/installment_collection');
    }

    public function sales_order_view() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->view('field_worker/sales_order_view');
    }

    public function sales_order_delevered() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->model('order_management_model', 'omm');
        $this->som->sales_order_delevered();
    }

    public function sales_order_list_approved() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'po');
        $this->load->view('field_worker/sales_order_list_approved');
    }

    public function sales_order_view_update() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('sales_order_model', 'po');
        $this->po->sales_order_view_update();
    }

    public function sales_order_view_approve() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('sales_order_model', 'po');
        $this->po->sales_order_view_approve();
    }
    //end of sales order
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */