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
        $this->load->helper('text');
        $this->load->helper('date');

        $this->load->library('session');
        $this->load->model('add_imam_model', 'aim');
        $this->load->model('add_kazi_model', 'akm');
        $this->load->model('add_mosque_model', 'amm');
        $this->load->model('add_muazzin_model', 'amzm');
        $this->load->model('add_purohit_model', 'apm');
        $this->load->model('add_temple_model', 'atm');
        $this->load->model('add_objection_model', 'aom');
        $this->load->model('add_student_model', 'assm');
        $this->load->model('page_model', 'pm');
        $this->load->model('user_modification_model', 'umm');


        if (!$this->session->userdata('user_name')) {
            redirect("login");
        }
    }


    public function index() {
        $this->session_data();
        $this->load->library('session');
        if (!$this->session->userdata('user_name')) {
            redirect("login");
        } else {

            $this->load->view('super_admin/index');
        }
    }

    //User Modification
    public function user_list(){
        $this->session_data();

        $this->load->view('super_admin/user_list');
    }
    public function edit_super_admin($id) {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $data['data'] = $this->umm->get_user_modification_id('admin_user',$id);
        $this->load->view('super_admin/edit_user_super_admin',$data);
    }

    public function edit_user_modification($id) {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $data['data'] = $this->umm->get_user_modification_id('admin_user',$id);
        $this->load->view('super_admin/edit_user_modification', $data);

    }

    public function update_user_modification() {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $this->umm->update_user_modification();
        redirect("super_admin/user_list");
    }

    public function update_user_profile() {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $this->umm->update_super_admin();
        redirect("super_admin");
    }

    function user_modification_delete($user_mod_id) {
        $this->session_data();
        $user_mod_id = $this->uri->segment(3);
        $this->db->where('u_id', $user_mod_id);
        $this->db->delete('admin_user');
        redirect("super_admin/user_list");
    }

    public function add_user(){
        $this->session_data();
        //$this->load->model('user_modification_model', 'umm');
        //$this->umm->create_user();
        $this->load->view('super_admin/add_user', 'refresh');
    }
    public function save_user() {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $this->umm->create_user();
        redirect("super_admin/user_modification_list");
    }


    //End User Modification

    //About Us  & Contact Us Page

    public function about_us() {
        $this->session_data();
        $this->load->model('page_model', 'pm');
        $data['data'] = $this->pm->about_us_id('pages');
        $this->load->view('super_admin/about_us', $data);
    }
    public function update_about_us(){
        $this->session_data();
        $this->load->model('page_model', 'pm');
        $this->pm->update_about_us();
        redirect("super_admin/about_us","refresh");
    }


    public function contact_page() {
        $this->session_data();
        $this->load->model('page_model', 'pm');
        $data['data'] = $this->pm->contact_page_id('contact_page');
        $this->load->view('super_admin/contact_page', $data);
    }

    public function update_contact_page(){
        $this->session_data();
        $this->load->model('page_model', 'pm');
        $this->pm->update_contact_page();
        redirect("super_admin/contact_page","refresh");
    }

    //Religious Institutions

    public function religious_institutions() {
        $this->session_data();
       // $data['mosquedata'] = $this->amm->get_mosque_id('slider',$id);
        $this->load->view('super_admin/religious_institutions');
    }
    public function message_list() {
        $this->session_data();
        $this->load->library('pagination');

       //$config['base_url'] = base_url() . "super_admin/message_list";

       //$config['total_rows'] = $this->Departments->record_count();
       //$config['per_page'] = 5;

       //$this->pagination->initialize($config);

       //echo $this->pagination->create_links();

        $this->load->view('super_admin/message_list');
    }

    //muazzin
    public function add_muazzin() {
        $this->session_data();
        $this->load->view('super_admin/add_muazzin');
    }
    public function muazzin_list() {
        $this->session_data();
        $this->load->view('super_admin/muazzin_list');
    }
    public function save_muazzin() {
        $this->session_data();
        $this->amzm->create_muazzin();
        redirect("super_admin/add_muazzin");
    }
    public function add_khatib() {
        $this->session_data();
        $this->load->view('super_admin/add_khatib');
    }
    public function khatib_list() {
        $this->session_data();
        $this->load->view('super_admin/khatib_list');
    }
    public function edit_khatib($id) {
        $this->session_data();
        $data['data'] = $this->amzm->get_khatib_id('khatib',$id);
        $this->load->view('super_admin/edit_khatib', $data);
    }
     public function edit_muazzin($id) {
            $this->session_data();
            $data['data'] = $this->amzm->get_muazzin_id('muazzin',$id);
            $this->load->view('super_admin/edit_muazzin', $data);
        }

    public function update_khatib() {
        $this->session_data();
        $this->amzm->update_khatib();
        redirect("super_admin/khatib_list","refresh");
    }
    public function update_muazzin() {
        $this->session_data();
        $this->amzm->update_muazzin();
        redirect("super_admin/muazzin_list","refresh");
    }

    public function khatib_delete() {
        $this->session_data();
        $khatib_id  = $this->uri->segment(3);
        $this->db->where('khatib_id', $khatib_id );
        $this->db->delete('khatib');
        $this->load->view('super_admin/khatib_list', "refresh" );
    }
    public function muazzin_delete() {
        $this->session_data();
        $muazzin_id  = $this->uri->segment(3);
        $this->db->where('muazzin_id', $muazzin_id );
        $this->db->delete('muazzin');
        $this->load->view('super_admin/muazzin_list',"refresh");
    }
    public function save_khatib() {
        $this->session_data();
        $this->amzm->create_khatib();
        redirect("super_admin/add_khatib");
    }

    //Start Slider
    public function add_slider() {
        $this->session_data();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('add_slider_model', 'asm');
        $this->asm->create_slider();
        $this->load->view('super_admin/add_slider');
    }


    public function slider_list() {
        $this->session_data();
        $this->load->model('add_slider_model', 'asm');
        $data['data'] = $this->asm->get_slider();
        $this->load->view('super_admin/slider_list', $data);
    }


    public function edit_slider($id) {
        $this->session_data();
        $this->load->model('add_slider_model', 'asm');
        $data['data'] = $this->asm->get_slider_id('slider',$id);
        $this->load->view('super_admin/edit_slider', $data);
    }

    public function update_slider() {
        $this->session_data();
        $this->load->model('add_slider_model', 'asm');
        $this->asm->update_slider();
        redirect("super_admin/slider_list");
    }

    function slider_delete($slider_id) {
        $this->session_data();
        $slider_id = $this->uri->segment(3);
        $this->db->where('slider_id', $slider_id);
        $this->db->delete('slider');
        redirect("super_admin/slider_list");
    }
    //End Slider

//add_institute
    public function add_institute() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aimm');
        // $this->load->model('order_management_model', 'omm');
        $this->aimm->create_institute();

        $this->load->view('super_admin/add_institute');
        
        
    }

    public function institute_list() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aimm');
        // $this->load->model('office_setup_model', 'osm');
        $this->load->view('super_admin/institute_list');
    }

    public function edit_institute($id) {
        $this->session_data();
        $this->load->model('add_institute_model', 'aimm');
        $data['data'] = $this->aimm->get_institute_id('institute',$id);
        $this->load->view('super_admin/institute_edit', $data);

    }

    public function update_institute() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aimm');
        $this->aimm->update_institute();
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
	$this->session_data();
	$this->load->model('add_institute_model', 'ains');
	$this->load->view('super_admin/add_student');
}

    public function save_student() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->asm->create_student();
        redirect("super_admin/add_student");
        $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Created successfully.</div>');
    }

    public function student_list() {
        $this->session_data();
//        $user = $this->session->userdata('user_name');
//        $this->db->where('who_add', $user);
        $this->db->where('student_type', 'student');
        $student_filter = $this->db->get('student');
        $data['data'] =  $student_filter->result();
        $this->load->view('super_admin/student_list',$data);
    }

public function edit_student($id) {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        
		$data['student'] = $this->asm->get_student_id('student',$id);
        $data['parents_info'] = $this->asm->parents_info_id('parents_info',$id);
        $data['guardian_info'] = $this->asm->guardian_info_id('guardian_info',$id);
        $this->load->view('super_admin/edit_student', $data);

}

	public function update_student() {
	$this->session_data();
	$this->load->model('add_student_model', 'asm');
	$this->asm->update_student();
	redirect("super_admin/student_list","refresh");
}

function student_delete($st_id) {
	$this->session_data();
	$st_id = $this->uri->segment(3);

	$this->db->where('st_id', $st_id);
    $this->db->delete('student');

    $this->db->where('uid', $st_id);
    $this->db->delete('guardian_info');

    $this->db->where('uid', $st_id);
    $this->db->delete('parents_info');

    redirect("super_admin/student_list");
}

    public function add_non_student() {
        $this->session_data();
        $this->load->view('super_admin/add_non_student');
    }


    public function save_non_student() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->asm->create_non_student();
        redirect("super_admin/add_non_student");
    }

    public function non_student_list() {
        $this->session_data();
        $user = $this->session->userdata('user_name');
//        $this->db->where('who_add', $user);
        $this->db->where('student_type', 'non_student');
        $student_filter = $this->db->get('student');
        $data['data'] =  $student_filter->result();
        $this->load->view('super_admin/non_student_list',$data);
    }

    public function edit_non_student($id) {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $data['student'] = $this->asm->get_student_id('student',$id);
        $data['parents_info'] = $this->asm->parents_info_id('parents_info',$id);
        $data['guardian_info'] = $this->asm->guardian_info_id('guardian_info',$id);
        $this->load->view('super_admin/edit_non_student', $data);

    }

    public function update_non_student() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->asm->update_non_student();
        redirect("super_admin/non_student_list","refresh");
    }

    function non_student_delete($st_id) {
	$this->session_data();
	$st_id = $this->uri->segment(3);
	$this->db->where('st_id', $st_id);
	$this->db->delete('student');
	redirect("super_admin/non_student_list");
}

   
    //End Non Student

	//News
    public function create_news() {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        $this->anm->create_news();
        $this->load->view('super_admin/create_news');
    }

    public function news_list() {
        $this->session_data();
        $this->load->helper('text');
        $this->load->model('add_news_model', 'anm');
        // $this->anm->get_news();
        $this->load->view('super_admin/news_list');
    }

  public function edit_news($id) {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        $data['data'] = $this->anm->get_news_id('news',$id);
        $this->load->view('super_admin/edit_news', $data);

    }

    public function update_news() {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        $this->anm->update_news();
        redirect("super_admin/news_list");
    }

    function news_delete($news_id) {
        $this->session_data();
        $news_id = $this->uri->segment(3);
        $this->db->where('news_id', $news_id);
        $this->db->delete('news');
        redirect("super_admin/news_list");
    } 


    // Add Purohit

    public function add_purohit(){
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $this->apm->create_purohit();
        $this->load->view('super_admin/add_purohit');
    }

    public function purohit_list() {
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $this->apm->get_purohit();
        $this->load->view('super_admin/purohit_list');
    }

    function purohit_delete($purohit_id) {
        $this->session_data();
        $news_id = $this->uri->segment(3);
        $this->db->where('purohit_id', $purohit_id);
        $this->db->delete('purohit');
        redirect("super_admin/purohit_list");
    }

    public function edit_purohit($id) {
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $data['data'] = $this->apm->get_purohit_id('purohit',$id);
        $this->load->view('super_admin/edit_purohit', $data);

    }

    public function update_purohit() {
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $this->apm->update_purohit();
        redirect("super_admin/purohit_list");
    }

    //End Purohit


    // Add Kazi

    public function add_kazi(){
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $this->akm->create_kazi();
        $this->load->view('super_admin/add_kazi');
    }

    public function kazi_list() {
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $this->akm->get_kazi();
        $this->load->view('super_admin/kazi_list');
    }

    function kazi_delete($kazi_id) {
        $this->session_data();
        $kazi_id = $this->uri->segment(3);
        $this->db->where('kazi_id', $kazi_id);
        $this->db->delete('kazi');
        redirect("super_admin/kazi_list");
    }

     public function edit_kazi($id) {
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $data['data'] = $this->akm->get_kazi_id('kazi',$id);
        $this->load->view('super_admin/edit_kazi', $data);

    }

    public function update_kazi() {
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $this->akm->update_kazi();
        redirect("super_admin/kazi_list");
    }
    //End Kazi

    // Add Imam

    public function add_imam(){
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $this->aim->create_imam();
        $this->load->view('super_admin/add_imam');
    }

    public function imam_list() {
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $this->aim->get_imam();
        $this->load->view('super_admin/imam_list');
    }

    function imam_delete($imam_id) {
        $this->session_data();
        $imam_id = $this->uri->segment(3);
        $this->db->where('imam_id', $imam_id);
        $this->db->delete('imam');
        redirect("super_admin/imam_list");
    }

    public function edit_imam($id) {
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $data['data'] = $this->aim->get_imam_id('imam',$id);
        $this->load->view('super_admin/edit_imam', $data);

    }

    public function update_imam() {
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $this->aim->update_imam();
        redirect("super_admin/imam_list");
    }

    //End Imam

    //Mosque Start
    public function add_mosque(){
        $this->session_data();
        $this->load->model('add_mosque_model', 'amm');
        $this->amm->create_mosque();
        $this->load->view('super_admin/add_mosque');
    }
    public function mosque_list() {
        $this->session_data();
        $this->load->model('add_mosque_model', 'amm');
        $this->amm->get_mosque();
        $this->load->view('super_admin/mosque_list');
    }

    function mosque_delete($mosque_id) {
        $this->session_data();
        $mosque_id = $this->uri->segment(3);
        $this->db->where('mosque_id', $mosque_id);
        $this->db->delete('mosque');
        redirect("super_admin/mosque_list");
    }

    public function edit_mosque($id) {
        $this->session_data();
        $this->load->model('add_mosque_model', 'amm');
        $data['data'] = $this->amm->get_mosque_id('mosque',$id);
        $this->load->view('super_admin/edit_mosque', $data);

    }
    public function update_mosque(){
        $this->session_data();
        $this->load->model('add_mosque_model', 'amm');
        $this->amm->update_mosque();
        redirect("super_admin/mosque_list");
    }

    //End Mosque

    //Temple Start
    public function add_temple(){
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $this->atmb->create_temple();
        $this->load->view('super_admin/add_temple');
    }
    public function temple_list() {
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $this->atmb->get_temple();
        $this->load->view('super_admin/temple_list');
    }

    function temple_delete($temple_id) {
        $this->session_data();
        $temple_id = $this->uri->segment(3);
        $this->db->where('temple_id', $temple_id);
        $this->db->delete('temple');
        redirect("super_admin/temple_list");
    }

    public function edit_temple($id) {
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $data['data'] = $this->atmb->get_temple_id('temple',$id);
        $this->load->view('super_admin/edit_temple', $data);

    }

    public function update_temple(){
        $this->session_data();
        $this->load->model('add_temple_model', 'atmb');
        $this->atmb->update_temple();
        redirect("super_admin/temple_list");
    }

    //End Temple

    //Guardian List
    public function guardian_list() {
        $this->session_data();
        $this->load->model('guardian_model', 'gm');
        $this->gm->get_guardian();
        $this->load->view('super_admin/guardian_list');
    }



    //    Add Law/Regulations
    public function add_law_regulation(){
        $this->session_data();   
		$this->load->view('super_admin/add_law_regulation');    
    }

    public function save_law_regulation() {
        $this->session_data();
        $this->load->model('add_law_regulation_model', 'alrm');
        $this->alrm->create_law_regulation();        
    }
    
    public function law_regulation_list() {
        
        $this->session_data();
        $this->load->model('add_law_regulation_model', 'alrm');
		//  $this->alrm->get_law_regulation();
        $this->load->view('super_admin/law_regulation_list');
    }

    public function edit_law_regulation($id) {
        $this->session_data();
        $this->load->model('add_law_regulation_model', 'alrm');
        $data['data'] = $this->alrm->get_law_regulation_id('law_regulation',$id);
        $this->load->view('super_admin/edit_law_regulation', $data);

    }

	public function update_law_regulation() {
		$this->session_data();
		$this->load->model('add_law_regulation_model', 'alrm');
		$this->alrm->update_law_regulation();
		redirect("super_admin/law_regulation_list");
	}


    function law_regulation_delete($law_id) {
        $this->session_data();
        $law_id = $this->uri->segment(3);
        $this->db->where('law_regulation_id ', $law_id);
        $this->db->delete('law_regulation');
        redirect("super_admin/law_regulation_list");
    }

    //Objections Start
        public function add_objection(){
            $this->session_data();
            $this->load->model('add_objection_model', 'aom');
            $this->aom->create_objection();
    		$this->load->view('super_admin/add_objection');
        }

    public function objections_list() {
        $this->session_data();
        $this->load->model('add_objection_model', 'aom');
        $this->aom->get_objection();
        $this->load->view('super_admin/objections_list');
    }

    function objection_delete($objection_id) {
        $this->session_data();
        $objection_id = $this->uri->segment(3);
        $this->db->where('obj_id', $objection_id);
        $this->db->delete('objections');
        redirect("super_admin/objections_list");
    }
	

    public function edit_objection($id) {
        $this->session_data();
        $this->load->model('add_objection_model', 'aom');
        $data['data'] = $this->aom->get_objection_id('objections',$id);
        $this->load->view('super_admin/edit_objection', $data);

    }
     public function update_objection() {
         $this->session_data();
         $this->load->model('add_objection_model', 'aom');
         $this->aom->update_objection();
         redirect("super_admin/objections_list");
     }


	 public function pending_marriage() {
		$this->session_data();
		$this->db->where('marriage_status', 'pending');
		$result = $this->db->get('marriage_couple');
		$data['data'] =  $result->result();
		$this->load->view('super_admin/painding_marriage_list', $data);
		}

		public function approved_marriage() {
			$this->session_data();
			$this->db->where('marriage_status', 'Married');
			$result = $this->db->get('marriage_couple');
			$data['data'] =  $result->result();
			$this->load->view('super_admin/painding_marriage_list', $data);
			}

		public function rejected_marriage() {
				$this->session_data();
				$this->db->where('marriage_status', 'rejected');
				$result = $this->db->get('marriage_couple');
				$data['data'] =  $result->result();
				$this->load->view('super_admin/painding_marriage_list', $data);
			}
	



        public function approve_marriage($marriage_couple_id ) {
            $this->session_data();
            $this->load->model('add_student_model', 'asm');
            $data['data'] = $this->asm->approve_marriage('marriage_couple',$marriage_couple_id );
            redirect("super_admin/pending_marriage");
        }

		public function reject_marriage($marriage_couple_id ) {
            $this->session_data();
            $this->load->model('add_student_model', 'asm');
            $data['data'] = $this->asm->reject_marriage('marriage_couple',$marriage_couple_id );
            redirect("super_admin/painding_marriage");
        }

        public function marriage_details($marriage_couple_id) {
            $this->session_data();
			$this->load->model('add_student_model', 'asm');
            $data['data'] = $this->asm->get_marriage_details('marriage_couple',$marriage_couple_id);
            $this->load->view('super_admin/marriage_details', $data);
        }
		
		function marriage_delete($marriage_couple_id) {
			$this->session_data();
			$marriage_couple_id = $this->uri->segment(3);
			$this->db->where('marriage_couple_id', $marriage_couple_id);
			$this->db->delete('marriage_couple');
			redirect("super_admin/pending_marriage");
		}
}




