<?php
ob_start();
class add_non_student_model  extends CI_Model {

	public function create_non_student()
	{
		$non_st_photo = $_FILES['non_st_photo']['name'];
		if ($non_st_photo != "") {
			$non_st_photo = random_string('alnum', 10) . '.jpg';
			
			//insert image
			$config['file_name'] = $non_st_photo;
			$config['upload_path'] = 'uploads/non_student';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '100000';
			$config['encrypt_name']     = false;
			$config['image_library'] = 'gd2';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('non_st_photo');

			$file_data = $this->upload->data();
		} else {
			$non_st_photo = "default.png";
		}
		
     // Insert Data In Non Student Table 
       $non_student['non_st_name'] 					= $this->input->post('non_st_name');
	   $non_student['non_st_date_of_birth'] 		= $this->input->post('non_st_date_of_birth');
	   $non_student['non_st_gender'] 				= $this->input->post('non_st_gender');
	   $non_student['non_st_bg_group'] 				= $this->input->post('non_st_bg_group');
	   $non_student['non_st_religion'] 				= $this->input->post('non_st_religion');
	   $non_student['non_st_phone'] 				= $this->input->post('non_st_phone');
	   $non_student['non_st_nid_no'] 				= $this->input->post('non_st_nid_no');
	   $non_student['non_st_birth_certificate_id'] 	= $this->input->post('non_st_birth_certificate_id');
	   $non_student['non_st_health_condition'] 		= $this->input->post('non_st_health_condition');
	   $non_student['non_st_photo'] 				= $non_st_photo;
	   $non_student['non_st_present_address'] 		= $this->input->post('non_st_present_address');
	   $non_student['non_st_permanent_address'] 	= $this->input->post('non_st_permanent_address');

	   $non_student['non_st_fathers_name'] 		= $this->input->post('non_st_fathers_name');
	   $non_student['non_st_fathers_phone'] 		= $this->input->post('non_st_fathers_phone');
	   $non_student['non_st_fathers_nid'] 		= $this->input->post('non_st_fathers_nid');
	   $non_student['non_st_fathers_profession'] 	= $this->input->post('non_st_fathers_profession');
	   $non_student['non_st_mothers_name'] 		= $this->input->post('non_st_mothers_name');
	   $non_student['non_st_mothers_phone'] 		= $this->input->post('non_st_mothers_phone');
	   $non_student['non_st_mothers_nid']			= $this->input->post('non_st_mothers_nid');
	   $non_student['non_st_mothers_profession'] 	= $this->input->post('non_st_mothers_profession');

       $non_student['non_st_guardian_info_type'] = $this->input->post('non_st_guardian_info_type');
       $non_student['non_st_guardian_info_name'] = $this->input->post('non_st_guardian_info_name');
       $non_student['non_st_guardian_info_phone'] = $this->input->post('non_st_guardian_info_phone');
       $non_student['non_st_guardian_info_rltn'] = $this->input->post('non_st_guardian_info_rltn');
       $non_student['non_st_guardian_info_nid'] = $this->input->post("non_st_guardian_info_nid");
	   $non_student['non_st_guardian_info_profession'] = $this->input->post("non_st_guardian_info_profession");
	   $non_student['non_st_guardian_info_date_of_birth'] = $this->input->post("non_st_guardian_info_date_of_birth");
	   $non_student['non_st_guardian_info_religion'] = $this->input->post("non_st_guardian_info_religion");
       $non_student['non_st_guardian_info_other'] = $this->input->post("non_st_guardian_info_other");
	   $non_student['non_st_guardian_info_present_address'] = $this->input->post("non_st_guardian_info_present_address");
	   $non_student['non_st_guardian_info_permanent_address'] = $this->input->post("non_st_guardian_info_permanent_address");

       $this->db->insert('non_student', $non_student);
       $uid = $this->db->insert_id();

       // View
	//    $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Created successfully.</div>');
	   redirect("super_admin/add_non_student");

	}

	// public function get_non_student() {
    //     // $id = $this->db->order_by('st_id', 'DESC'); 
    //     $this->db->select('p.*,g.*','s*'); 
    //     $this->db->from('parents_info as p');   
    //     $this->db->join('student as s','s.st_id = p.uid');
    //     $this->db->join('guardian_info as g','g.uid = p.uid');
    //     $this->db->where('s.st_id','p.uid');
    //     $query_result = $this->db->get();
    //     $result = $query_result->result();
    //     return $result;
    // }
    

}
