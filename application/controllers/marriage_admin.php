<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class marriage_admin extends CI_Controller {



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
            $this->load->view('marriage_admin/index');
        }
    }





    // Add Purohit

    public function add_purohit(){
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $this->apm->create_purohit();
        $this->load->view('marriage_admin/add_purohit');
    }

    public function purohit_list() {
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $this->apm->get_purohit();
        $this->load->view('marriage_admin/purohit_list');
    }

    function purohit_delete($purohit_id) {
        $this->session_data();
        $news_id = $this->uri->segment(3);
        $this->db->where('purohit_id', $purohit_id);
        $this->db->delete('purohit');
        redirect("marriage_admin/purohit_list");
    }

    public function edit_purohit($id) {
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $data['data'] = $this->apm->get_purohit_id('purohit',$id);
        $this->load->view('marriage_admin/edit_purohit', $data);

    }

    public function update_purohit() {
        $this->session_data();
        $this->load->model('add_purohit_model', 'apm');
        $this->apm->update_purohit();
        redirect("marriage_admin/purohit_list");
    }

    //End Purohit


    // Add Kazi

    public function add_kazi(){
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $this->akm->create_kazi();
        $this->load->view('marriage_admin/add_kazi');
    }

    public function kazi_list() {
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $this->akm->get_kazi();
        $this->load->view('marriage_admin/kazi_list');
    }

    function kazi_delete($kazi_id) {
        $this->session_data();
        $kazi_id = $this->uri->segment(3);
        $this->db->where('kazi_id', $kazi_id);
        $this->db->delete('kazi');
        redirect("marriage_admin/kazi_list");
    }

     public function edit_kazi($id) {
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $data['data'] = $this->akm->get_kazi_id('kazi',$id);
        $this->load->view('marriage_admin/edit_kazi', $data);

    }

    public function update_kazi() {
        $this->session_data();
        $this->load->model('add_kazi_model', 'akm');
        $this->akm->update_kazi();
        redirect("marriage_admin/kazi_list");
    }
    //End Kazi

    // Add Imam

    public function add_imam(){
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $this->aim->create_imam();
        $this->load->view('marriage_admin/add_imam');
    }

    public function imam_list() {
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $this->aim->get_imam();
        $this->load->view('marriage_admin/imam_list');
    }

    function imam_delete($imam_id) {
        $this->session_data();
        $imam_id = $this->uri->segment(3);
        $this->db->where('imam_id', $imam_id);
        $this->db->delete('imam');
        redirect("marriage_admin/imam_list");
    }

    public function edit_imam($id) {
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $data['data'] = $this->aim->get_imam_id('imam',$id);
        $this->load->view('marriage_admin/edit_imam', $data);

    }

    public function update_imam() {
        $this->session_data();
        $this->load->model('add_imam_model', 'aim');
        $this->aim->update_imam();
        redirect("marriage_admin/imam_list");
    }

    //End Imam
	public function birth() {
		$this->session_data();
		$this->load->model('add_institute_model', 'aim');
        $data['data'] = $this->aim->get_institute();
		$this->load->view('marriage_admin/birth_chack', $data);      
	}

	public function birth_chack(){
		$this->session_data();
		$groom_birth_id = $this->input->post('groom_birth_id');
		$bride_birth_id = $this->input->post('bride_birth_id');

		$this->db->where('st_nid_no', $groom_birth_id);
		$this->db->or_where('st_birth_certificate_id', $groom_birth_id);
		
		$histry = $this->db->get('student');
		$result['histry1'] =  $histry->row();

		$this->db->where('st_nid_no', $bride_birth_id);
		$this->db->or_where('st_birth_certificate_id', $bride_birth_id);

		$histry2 = $this->db->get('student');
		$result['histry2'] =  $histry2->row();

		if ($histry->num_rows() > 0 || $histry2->num_rows() > 0)  {
            // Matching number found
	
			if ($result['histry1'] === null) {

				$this->load->view('marriage_admin/birth_chack_4',$result);
			// if one no match
			}if($result['histry2'] === null){

				$this->load->view('marriage_admin/birth_chack_3',$result);
			}else{
				$this->load->view('marriage_admin/birth_chack_2',$result);
			}
			 
        } else {
            // No matching number found
			header('Refresh:1; url= '. base_url().'marriage_admin/no_nid'); 
  			echo "<h3>No Data Match. Please Add. </h3><br>  <h3>Please Add .  You will be redirected in 5 seconds...</h3>";
        }   
	}



	public function no_nid() {
		$this->session_data();
		$this->load->view('marriage_admin/no_nid');
	}

	public function add_student() {
		$this->session_data();
		$this->load->model('add_institute_model', 'aim');
		$this->load->view('marriage_admin/add_student');
	}
	
	
	public function save_student() {
		$this->session_data();
		$this->load->model('add_student_model', 'asm');
		$this->asm->create_student();
		redirect("marriage_admin/add_student");
	}
	
	public function student_list() {
		$this->session_data();
		$user = $this->session->userdata('user_name');
		$this->db->where('who_add', $user);
        $this->db->where('student_type', 'student');
		$student_filter = $this->db->get('student');
		$data['data'] =  $student_filter->result();
		$this->load->view('marriage_admin/student_list',$data);
	}
	
	public function edit_student($id) {
			$this->session_data();
			$this->load->model('add_student_model', 'asm');
			$data['student'] = $this->asm->get_student_id('student',$id);
			$data['parents_info'] = $this->asm->parents_info_id('parents_info',$id);
			$data['guardian_info'] = $this->asm->guardian_info_id('guardian_info',$id);
			$this->load->view('marriage_admin/edit_student', $data);
	
	}
	
		public function update_student() {
		$this->session_data();
		$this->load->model('add_student_model', 'asm');
		$this->asm->update_student();
		redirect("marriage_admin/student_list","refresh");
	}

    function student_delete($_st_id) {
        $this->session_data();
        $st_id = $this->uri->segment(3);
        $this->db->where('st_id', $st_id);
        $this->db->delete('student');
        redirect("marriage_admin/student_list");
    }



    public function add_non_student() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        $this->load->view('marriage_admin/add_non_student');
    }


    public function save_non_student() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->asm->create_non_student();
        redirect("marriage_admin/non_student_list");
    }

    public function non_student_list() {
        $this->session_data();
        $user = $this->session->userdata('user_name');
        $this->db->where('who_add', $user);
        $this->db->where('student_type', 'non_student');
        $student_filter = $this->db->get('student');
        $data['data'] =  $student_filter->result();
        $this->load->view('marriage_admin/non_student_list',$data);
    }

    public function edit_non_student($id) {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $data['student'] = $this->asm->get_student_id('student',$id);
        $data['parents_info'] = $this->asm->parents_info_id('parents_info',$id);
        $data['guardian_info'] = $this->asm->guardian_info_id('guardian_info',$id);
        $this->load->view('marriage_admin/edit_non_student', $data);

    }

    public function update_non_student() {
        $this->session_data();
        $this->load->model('add_student_model', 'asm');
        $this->asm->update_non_student();
        redirect("marriage_admin/non_student_list","refresh");
    }
	
	   
		//End Non Student


		public function save_marriage() {
		
		$this->session_data();
		$this->load->model('add_student_model', 'asm');
		$this->asm->create_marriage_couple();

 		header('Refresh:3; url= '. base_url().'/marriage_admin/birth'); 
  		echo "<h1>Your Request Now Pending. You will be redirected in 5 seconds...</h1>";
		}


		public function edit_profile(){
			$this->session_data();
			$this->load->view('marriage_admin/edit_profile');
		}
		public function update_profile(){
			$this->session_data();
			$this->load->model('profile_update_model', 'pum');
			$this->pum->update_profile_marriage_admin();
			redirect("marriage_admin/edit_profile");
		}
        


    public function marriage_list() {
        $this->session_data();
        $user = $this->session->userdata('user_name');
        $this->db->where('medium_user', $user);
        $result = $this->db->get('marriage_couple');
        $data['data'] =  $result->result();
        $this->load->view('marriage_admin/painding_marriage_list', $data);
    }
}




