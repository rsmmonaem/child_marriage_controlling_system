<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fw_registration extends CI_Controller {

    function __construct() {
        parent::__construct();

        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }

    /*public function session_data() {		
		$this->load->model('requisition_model','rm');
		$this->load->model('purchase_order_model','po');
		$this->load->library('session');
        if(!$this->session->userdata('user_name')){redirect("login");}

	}*/

    // start field worker
    public function create_field_worker() {

        $this->load->model('office_setup_model', 'osm');
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');

        $this->load->view('fw_registration/create_field_worker');
    }

    public function insert_field_worker() {

        $this->load->model('office_setup_model', 'osm');
        $this->load->model('fw_registration_model', 'frm');
        $this->frm->create_field_worker();
    }

    public function success() {

        $this->load->model('office_setup_model', 'osm');
        $this->load->model('distributor_management_model', 'dmm');
        $this->load->model('order_management_model', 'omm');

        $this->load->view('fw_registration/success');
    }
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */