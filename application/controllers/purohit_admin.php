<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class purohit_admin extends CI_Controller {


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
            $this->load->view('purohit_admin/index');
        }
    }
   // Add Purohit

   public function add_purohit(){
	$this->session_data();
	$this->load->model('add_purohit_model', 'apm');
	$this->apm->create_purohit();
	$this->load->view('purohit_admin/add_purohit');
}

public function purohit_list() {
	$this->session_data();
	$this->load->model('add_purohit_model', 'apm');
	$this->apm->get_purohit();
	$this->load->view('purohit_admin/purohit_list');
}

function purohit_delete($purohit_id) {
	$this->session_data();
	$news_id = $this->uri->segment(3);
	$this->db->where('purohit_id', $purohit_id);
	$this->db->delete('purohit');
	redirect("purohit_admin/purohit_list");
}

public function edit_purohit($id) {
	$this->session_data();
	$this->load->model('add_purohit_model', 'apm');
	$data['data'] = $this->apm->get_purohit_id('purohit',$id);
	$this->load->view('purohit_admin/edit_purohit', $data);

}

public function update_purohit() {
	$this->session_data();
	$this->load->model('add_purohit_model', 'apm');
	$this->apm->update_purohit();
	redirect("purohit_admin/purohit_list");
}

//End Purohit





}




