<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Store_keeper extends CI_Controller {


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
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->library('session');
        if (!$this->session->userdata('user_name')) {
            redirect("login");
        } else {

            $this->load->view('store_keeper/index');
        }
    }





    // start SUPPLIER

    public function create_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/create_supplier');
    }

    public function insert_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->create_supplier();
    }

    public function create_sup_category() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->create_sup_category();
    }

    public function supplier_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/supplier_list');
    }

    public function edit_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/edit_supplier');
    }

    public function update_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->update_supplier();
    }

    function delete_supplier($sup_id, $path) {
        $this->session_data();
        $sup_id = $this->uri->segment(3);
        $path = $this->uri->segment(4);
        $this->db->where('sup_id', $sup_id);
        $this->db->delete('supplier');
        unlink(FCPATH . 'uploads/photos/' . $path);
        redirect("store_keeper/supplier_list");
    }


    public function search_supplier() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->search_supplier();
    }

    public function supplier_list_search() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/supplier_list_search');
    }

    //END OF SUPPLIER


    // START OF PRODUCT ENTRY

    public function create_pro_name() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->create_pro_name();
    }

    public function create_pro_brand() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->create_pro_brand();
    }

    public function create_inventory() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/create_inventory');
    }

    public function insert_inventory() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->insert_inventory();
    }

    public function inventory_cart_delete() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->inventory_cart_delete();
    }

    public function inventory_submit() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->inventory_submit();
    }

    public function inventory_view() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/inventory_view');
    }

    public function create_pro_category() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->create_pro_category();
    }

    public function create_pro_sub_cat() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->create_pro_sub_cat();
    }

    public function inventory_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/inventory_list');
    }

    public function supplier_inventory_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/supplier_inventory_list');
    }

    public function deleteinventory() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->deleteinventory();
    }

    public function stock_check() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/stock_check');
    }

    public function deleteproduct() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->deleteproduct();
    }

    public function outof_stock_check() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/outof_stock_check');
    }

    public function deleteoutofstock() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->deleteoutofstock();
    }

    public function category_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/category_list');
    }

    public function pro_cat_delete() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->pro_cat_delete();
    }

    public function sub_category_list() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->view('store_keeper/sub_category_list');
    }

    public function sub_cat_delete() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->imm->sub_cat_delete();
    }



    // END OF PRODUCT ENTRY

    // START OF REQUISITION

    public function requisition_submit() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->rm->requisition_submit();
    }

    public function requisition_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->view('store_keeper/requisition_list');
    }

    public function requisition_view() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->view('store_keeper/requisition_view');
    }

    public function requisition_list_pending() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->view('store_keeper/requisition_list_pending');
    }

    public function requisition_list_approved() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->view('store_keeper/requisition_list_approved');
    }

    public function distribution_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->view('store_keeper/distribution_list');
    }

    public function requisition_approved() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->rm->requisition_approved();
    }


    public function edit_store_keeper() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->view('store_keeper/edit_store_keeper');
    }

    public function update_store_keeper() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->urm->update_store_keeper();
    }

    public function requisition_distribute() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->rm->requisition_distribute();
    }


    // END OF REQUISITION

    // START PURCHASE ORDER



    public function purchase_order() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('store_keeper/purchase_order');
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
        $this->load->view('store_keeper/purchase_order_list');
    }
    public function purchase_order_view() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('store_keeper/purchase_order_view');
    }

    public function purchase_order_list_pending() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('store_keeper/purchase_order_list_pending');
    }

    public function purchase_order_list_approved() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('store_keeper/purchase_order_list_approved');
    }

    public function purchase_order_list_reject() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('purchase_order_model', 'po');
        $this->load->view('store_keeper/purchase_order_list_reject');
    }
}
