<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class temple_admin extends CI_Controller {


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

            $this->load->model('user_registration_model', 'urm');
            $this->load->view('temple_admin/index');
        }
    }

public function add_temple(){
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $this->atmb->create_temple();
        $this->load->view('temple_admin/add_temple');
    }

    public function temple_list() {
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $this->atmb->get_temple();
        $this->load->view('temple_admin/temple_list');
    }

    function temple_delete($temple_id) {
        $this->session_data();
        $temple_id = $this->uri->segment(3);
        $this->db->where('temple_id', $temple_id);
        $this->db->delete('temple');
        redirect("temple_admin/temple_list");
    }

    public function edit_temple($id) {
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $data['data'] = $this->atmb->get_temple_id('temple',$id);
        $this->load->view('temple_admin/edit_temple', $data);

    }

    public function update_temple(){
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $this->atmb->update_temple();
        redirect("temple_admin/temple_list");
    }

    //End Temple
}
