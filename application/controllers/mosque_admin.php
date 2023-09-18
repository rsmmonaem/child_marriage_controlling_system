<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class mosque_admin extends CI_Controller {


    function __construct() {
        parent::__construct();

        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }

	public function session_data() {

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
            $this->load->view('mosque_admin/index');
        }
    }


//Mosque Start
public function add_mosque(){
	$this->session_data();
	$this->load->model('add_mosque_model', 'amm');
	$this->amm->create_mosque();
	$this->load->view('mosque_admin/add_mosque');
}
public function mosque_list() {
	$this->session_data();
	$this->load->model('add_mosque_model', 'amm');
	$this->amm->get_mosque();
	$this->load->view('mosque_admin/mosque_list');
}

function mosque_delete($mosque_id) {
	$this->session_data();
	$mosque_id = $this->uri->segment(3);
	$this->db->where('mosque_id', $mosque_id);
	$this->db->delete('mosque');
	redirect("mosque_admin/mosque_list");
}

public function edit_mosque($id) {
	$this->session_data();
	$this->load->model('add_mosque_model', 'amm');
	$data['data'] = $this->amm->get_mosque_id('mosque',$id);
	$this->load->view('mosque_admin/edit_mosque', $data);

}
public function update_mosque(){
	$this->session_data();
	$this->load->model('add_mosque_model', 'amm');
	$this->amm->update_mosque();
	redirect("mosque_admin/mosque_list");
}

    //End Mosque
}
