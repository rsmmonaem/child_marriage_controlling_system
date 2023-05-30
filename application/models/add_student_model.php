<?php
ob_start();
class add_student_model  extends CI_Model {


	public function create_student()
	{
		$st_photo = $_FILES['st_photo']['name'];
		if ($st_photo != "") {
			$st_photo = random_string('alnum', 10) . '.jpg';
			
			//insert image
			$config['file_name'] = $st_photo;
			$config['upload_path'] = 'uploads/student';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '100000';
			$config['encrypt_name']     = false;
			$config['image_library'] = 'gd2';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('st_photo');

			$file_data = $this->upload->data();
		} else {
			$st_photo = "default.png";
		}
		
     // Insert Data In Student Table 
       $student['st_name'] 					= $this->input->post('st_name');
	   $student['st_date_of_birth'] 		= $this->input->post('st_date_of_birth');
	   $student['st_gender'] 				= $this->input->post('st_gender');
	   $student['st_bg_group'] 				= $this->input->post('st_bg_group');
	   $student['st_religion'] 				= $this->input->post('st_religion');
	   $student['st_phone'] 				= $this->input->post('st_phone');
	   $student['st_nid_no'] 				= $this->input->post('st_nid_no');
	   $student['st_birth_certificate_id'] 	= $this->input->post('st_birth_certificate_id');
	   $student['st_health_condition'] 		= $this->input->post('st_health_condition');
	   $student['st_photo'] 				= $st_photo;
	   $student['st_inst_name'] 			= $this->input->post('st_inst_name');
	   $student['st_present_address'] 		= $this->input->post('st_present_address');
	   $student['st_permanent_address'] 	= $this->input->post('st_permanent_address');

       $this->db->insert('student', $student);
       $uid = $this->db->insert_id();
	   



    // Insert Data In parents_info Table 
	   $parents_info['uid'] 				=$uid;
	   $parents_info['fathers_name'] 		= $this->input->post('fathers_name');
	   $parents_info['fathers_phone'] 		= $this->input->post('fathers_phone');
	   $parents_info['fathers_nid'] 		= $this->input->post('fathers_nid');
	   $parents_info['fathers_profession'] 	= $this->input->post('fathers_profession');
	   $parents_info['mothers_name'] 		= $this->input->post('mothers_name');
	   $parents_info['mothers_phone'] 		= $this->input->post('mothers_phone');
	   $parents_info['mothers_nid']			= $this->input->post('mothers_nid');
	   $parents_info['mothers_profession'] 	= $this->input->post('mothers_profession');

       $this->db->insert('parents_info',$parents_info);
       $id = $this->db->insert_id();
	

	   // Insert Data In Payments Table
       $guardian_info['uid'] = $uid;
       $guardian_info['guardian_info_type'] = $this->input->post('guardian_info_type');
       $guardian_info['guardian_info_name'] = $this->input->post('guardian_info_name');
       $guardian_info['guardian_info_phone'] = $this->input->post('guardian_info_phone');
       $guardian_info['guardian_info_rltn'] = $this->input->post('guardian_info_rltn');
       $guardian_info['guardian_info_nid'] = $this->input->post("guardian_info_nid");
	   $guardian_info['guardian_info_profession'] = $this->input->post("guardian_info_profession");
	   $guardian_info['guardian_info_date_of_birth'] = $this->input->post("guardian_info_date_of_birth");
	   $guardian_info['guardian_info_religion'] = $this->input->post("guardian_info_religion");
       $guardian_info['guardian_info_other'] = $this->input->post("guardian_info_other");
	   $guardian_info['guardian_info_present_address'] = $this->input->post("guardian_info_present_address");
	   $guardian_info['guardian_info_permanent_address'] = $this->input->post("guardian_info_permanent_address");
       $this->db->insert('guardian_info', $guardian_info);
       $gid = $this->db->insert_id();
       
      // Insert Data In users
    
       
       // View
	   $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Created successfully.</div>');
	   redirect("super_admin/add_student");

	}

	public function get_student() {
        // $id = $this->db->order_by('st_id', 'DESC'); 
        $this->db->select('p.*,g.*','s*'); 
        $this->db->from('parents_info as p');   
        $this->db->join('student as s','s.st_id = p.uid');
        $this->db->join('guardian_info as g','g.uid = p.uid');
        $this->db->where('s.st_id','p.uid');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
	
    // function get_student() {
    //     $this->db->order_by("st_id ", "DESC");
    //     $query = $this->db->get("student");
    //     return $query->result();
    // }

    //   function get_student_id($table, $id)
    // {
    //     $result = $this->db->get_where($table, ['inst_id' => $id])->row();
    //     return $result;
    // }

    // function update_student() {


    //     $this->load->library("form_validation");
    //     $this->form_validation->set_rules("inst_name", "inst_name", "xss_clean");
    //     $this->form_validation->set_rules("inst_eiin", "inst_eiin", "xss_clean");
    //     $this->form_validation->set_rules("inst_founded", "inst_founded", "xss_clean");
    //     $this->form_validation->set_rules("inst_board", "inst_board", "xss_clean");
    //     $this->form_validation->set_rules("inst_contact", "inst_contact", "xss_clean");
    //     $this->form_validation->set_rules("inst_logo", "inst_logo", "xss_clean");


    //     if ($this->form_validation->run() == FALSE) {
    //         echo  $this->upload->display_errors();
    //         //$this->load->view('super_admin/company_list/error');
    //     } else {

    //         $inst_logo = $_FILES['inst_logo']['name'];

    //         //OLD IMAGE
    //         $prev_logo = $this->input->post('old_logo');


    //         if ($inst_logo != "") {
    //             $inst_logo = random_string('alnum', 10) . '.jpg';
    //             //insert image
    //             $config['file_name'] = $inst_logo;
    //             $config['upload_path'] = 'uploads/student';
    //             $config['allowed_types'] = 'gif|jpg|jpeg|png';
    //             $config['max_size']         = '100000';
    //             $config['encrypt_name']     = false;

    //             $this->load->library('upload', $config);
    //             $this->upload->initialize($config);
    //             $this->upload->do_upload('inst_logo');

    //             $file_data = $this->upload->data();
    //         } else {
    //              $inst_logo = $prev_logo;
    //         }






    //         $inst_id = $this->uri->segment(3);

    //         //zone change

    //         // echo $company_code = $this->input->post('company_code');


    //         //insert data to database

    //         $data = array(




    //             'inst_name'             => $this->input->post('inst_name'),
    //             'inst_eiin'                 => $this->input->post('inst_eiin'),
    //             'inst_founded'                 => $this->input->post('inst_founded'),
    //             'inst_board'             => $this->input->post('inst_board'),
    //             'inst_contact'             => $this->input->post('inst_contact'),
    //             'inst_logo'                 => $inst_logo,


    //         );


    //         $this->db->where('inst_id', $inst_id);
    //         $this->db->update('student', $data);
    //     }
    // }

}
