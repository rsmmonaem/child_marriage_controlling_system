<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Distributor extends CI_Controller {


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
            $this->load->view('distributor/order_list');
        }
    }



    // office setup


    public function bank_details() {
        $this->session_data();
        $this->load->model('office_setup_model', 'osm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('distributor/bank_details_list');
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
        $this->load->view('distributor/bank_deposit_list');
    }


    //end of office setup


    //end of zonal manager



    // start field worker



    public function edit_distributor() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->load->view('distributor/edit_distributor');
    }

    public function update_distributor() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->urm->update_distributor();
    }

    public function update_distributor_panel() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->urm->update_distributor_panel();
    }



    //end of field worker

    // start customer



    public function purchase_order_approved() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->model('office_setup_model', 'osm');
        $this->urm->purchase_order_approved_admin();
    }

    //end of customer



    public function update_profile() {
        $this->session_data();
        $this->load->model('user_registration_model', 'urm');
        $this->load->view('distributor/update_profile');
    }


    //end of Common Users/Employee




    // START OF PRODUCT ENTRY



    public function stock_check() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('distributor/stock_check');
    }



    public function outof_stock_check() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->view('distributor/outof_stock_check');
    }



    // END OF PRODUCT ENTRY


    // START OF REQUISITION



    public function distribution_list() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->view('distributor/distribution_list');
    }



    // END OF REQUISITION

    // START OF ORDER

    public function create_order() {
        $this->session_data();
        $this->load->model('inventory_management_model', 'imm');
        $this->load->model('order_management_model', 'omm');
        $this->load->model('user_registration_model', 'urm');
        $this->load->view('distributor/create_order');
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
        $this->load->view('distributor/order_list');
    }
    public function order_view() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('distributor/order_view');
    }

    public function distributor_statement() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('distributor/distributor_statement');
    }

    public function order_list_pending() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('distributor/order_list_pending');
    }

    public function order_list_approved() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('distributor/order_list_approved');
    }

    public function order_list_reject() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('distributor/order_list_reject');
    }


    public function order_reject() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_reject();
    }

    public function order_approved() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_approved_distributor();
    }

    public function order_view_update() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->omm->order_view_update();
    }

    public function distribution_list2() {
        $this->session_data();
        $this->load->model('order_management_model', 'omm');
        $this->load->view('distributor/distribution_list');
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
        $this->load->view('distributor/create_sales');
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
        $this->load->view('distributor/sales_list');
    }
    public function sales_order_view() {
        $this->session_data();
        $this->load->model('requisition_model', 'rm');
        $this->load->model('purchase_model', 'pm');
        $this->load->model('sales_order_model', 'som');
        $this->load->view('distributor/sales_order_view');
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
        $this->load->view('distributor/sales_order_list_approved');
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