<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
    
	
	function __construct()
    {
        parent::__construct();
        $this->load->helper('text');

    }
    public function session_data(){
        $this->load->library('session');
        $this->load->model('add_notice_model', 'adm');
        $this->load->model('Add_news_model', 'anm');
        $this->load->model('add_mosque_model', 'amm');
        $this->load->model('add_imam_model', 'aim');
        $this->load->model('add_temple_model', 'atm');
        $this->load->model('add_purohit_model', 'apm');
        $this->load->model('add_slider_model', 'asm');
        $this->load->model('add_objection_model', 'aom');
        $this->load->model('add_law_regulation_model', 'alrm');

    }


    public function index() {
	    $this->session_data();
        $this->load->view('home/index');
       
    }
    public function notice() {
	    $this->session_data();
        $this->load->view('home/notice_list');

    }

    public function notice_details($id)
    {
        $this->session_data();
        $data['notice'] = $this->adm->get_notice_id('notice', $id);
        $this->load->view('home/notice_details', $data);
    }

    public function news() {
	    $this->session_data();
        $this->load->view('home/news_list');
    }
    public function laws() {
	    $this->session_data();
        $this->load->view('home/laws');
    }
    public function laws_details($id)
    {
        $this->session_data();
        $data['data'] = $this->alrm->get_law_regulation_id('law_regulation', $id);
        $this->load->view('home/laws_details', $data);
    }


    public function news_details($id)
    {
        $this->session_data();
        $data['news'] = $this->anm->get_news_id('news', $id);
        $this->load->view('home/news_details', $data);
    }

    public function mosque() {
	    $this->session_data();
        $this->load->view('home/mosque_list');
    }

    public function temple() {
	    $this->session_data();
        $this->load->view('home/temple_list');
    }

    public function imam() {
	    $this->session_data();
        $this->load->view('home/imam_list');
    }

    public function purohit() {
	    $this->session_data();
        $this->load->view('home/purohit_list');
    }

    public function purohit_details($id)
    {
	    $this->session_data();
        $data['data'] = $this->apm->get_purohit_home_id($id);
        $this->load->view('home/purohit_details', $data);
    }


    public function imam_details($id)
    {
	    $this->session_data();
	    $data['data'] = $this->aim->get_imam_id('imam', $id);
        $this->load->view('home/imam_details', $data);
    }

    public function mosque_details($id)
    {
	    $this->session_data();
	    $data['data'] = $this->amm->get_mosque_id('mosque', $id);
        $this->load->view('home/mosque_details', $data);
    }

    public function temple_details($id)
    {
	    $this->session_data();
	    $data['data'] = $this->atm->get_temple_id('temple', $id);

        $this->db->where("purohit_temple_id", $id);
        $data['purohit'] = $this->db->get('purohit')->result();

        $this->load->view('home/temple_details', $data);
    }

    public function about() {
	    $this->session_data();
        $this->load->model('page_model', 'pm');
        $data['about'] = $this->pm->about_us_id('pages');
        $this->load->view('home/about', $data);
    }
    public function contact(){
        $this->load->library('session');
        $this->session_data();
        $this->load->model('page_model', 'pm');
        $data['contact'] = $this->pm->contact_page_id('contact_page');
        $this->load->view('home/contact', $data );
    }

    public function contact_message_send() {
        $this->session_data();
        $this->load->model('page_model', 'pm');
        $this->pm->create_contact();
        redirect('home/successful');
    }

    public function successful(){
        $this->session_data();
        $this->load->view('home/successful');
    }

    public function objection(){
        $this->session_data();

        $this->load->view('home/objection');
    }
    public function objection_save(){
        $this->session_data();
        $this->aom->create_objection();
        redirect('home/successful');
    }


}
