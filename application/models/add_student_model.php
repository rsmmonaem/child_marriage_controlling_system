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
	//    $student['st_phone'] 				= $this->input->post('st_phone');
	   $student['st_nid_no'] 				= $this->input->post('st_nid_no');
	   $student['st_birth_certificate_id'] 	= $this->input->post('st_birth_certificate_id');
	   $student['st_health_condition'] 		= $this->input->post('st_health_condition');
	   $student['st_photo'] 				= $st_photo;
	   $student['st_class'] 			    = $this->input->post('st_class');
	   $student['st_class_section'] 		= $this->input->post('st_class_section');
	   $student['st_class_roll'] 			= $this->input->post('st_class_roll');
	   $student['st_inst_name'] 			= $this->input->post('st_inst_name');
	   $student['st_present_address'] 		= $this->input->post('st_present_address');
	   $student['st_permanent_address'] 	= $this->input->post('st_permanent_address');
	   $student['who_add'] 					= $this->input->post('who_add');
       $student['student_type'] 			= 'student';
       $student['st_union_pourosova'] 		= $this->input->post('st_union_pourosova');
       $student['st_ward'] 			        = $this->input->post('st_ward');
       $student['marital_status'] 			= 'Single';


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
	

	   // Insert Data In guardian_info Table
       $guardian_info['uid'] = $uid;
       $guardian_info['guardian_info_type']                  = $this->input->post('guardian_info_type');
       $guardian_info['guardian_info_name']                  = $this->input->post('guardian_info_name');
       $guardian_info['guardian_info_phone']                 = $this->input->post('guardian_info_phone');
       $guardian_info['guardian_info_rltn']                  = $this->input->post('guardian_info_rltn');
       $guardian_info['guardian_info_nid']                   = $this->input->post("guardian_info_nid");
	   $guardian_info['guardian_info_profession']            = $this->input->post("guardian_info_profession");
	   $guardian_info['guardian_info_date_of_birth']         = $this->input->post("guardian_info_date_of_birth");
	   $guardian_info['guardian_info_religion']              = $this->input->post("guardian_info_religion");
       $guardian_info['guardian_info_other']                 = $this->input->post("guardian_info_other");
	   $guardian_info['guardian_info_present_address']       = $this->input->post('st_present_address');
	   $guardian_info['who_add_guardian']                    = $this->input->post("who_add_guardian");
	   $guardian_info['guardian_info_permanent_address']     = $this->input->post('st_permanent_address');
       $this->db->insert('guardian_info', $guardian_info);
       $gid = $this->db->insert_id();
       
      // Insert Data In users
    
       
       // View


	}
// List student
	function get_student() {
        $this->db->order_by("st_id", "DESC");
        $query = $this->db->get("student");
        return $query->result();
		}

		function marriage_couple_dash() {
        $this->db->order_by("marriage_couple_id", "DESC");
        $query = $this->db->get("marriage_couple");
        return $query->result();
		}

	// signle student	
	public function get_student_row($id) {
		
		$this->db->from('student');
		$query = $this->db->get();
        $result = $query->row();
        return $result;
	}
		


		public function update_student()
		{
			$st_id 				= $this->input->post('st_id');
			$parents_info_id 	= $this->input->post('parents_info_id');
			$guardian_id		= $this->input->post('guardian_id ');
				
			$st_photo = $_FILES['st_photo']['name'];

			 //OLD IMAGE
			 $prev_st_photo = $this->input->post('old_st_photo');

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
				 $st_photo = $prev_st_photo;
			}
			
			 // Insert Data In Student Table 
            $student['st_name'] 					= $this->input->post('st_name');
            $student['st_date_of_birth'] 		= $this->input->post('st_date_of_birth');
            $student['st_gender'] 				= $this->input->post('st_gender');
            $student['st_bg_group'] 				= $this->input->post('st_bg_group');
            $student['st_religion'] 				= $this->input->post('st_religion');
            //    $student['st_phone'] 				= $this->input->post('st_phone');
            $student['st_nid_no'] 				= $this->input->post('st_nid_no');
            $student['st_birth_certificate_id'] 	= $this->input->post('st_birth_certificate_id');
            $student['st_health_condition'] 		= $this->input->post('st_health_condition');
            $student['st_photo'] 				= $st_photo;
            $student['st_class'] 			    = $this->input->post('st_class');
            $student['st_class_section'] 		= $this->input->post('st_class_section');
            $student['st_class_roll'] 			= $this->input->post('st_class_roll');
            $student['st_inst_name'] 			= $this->input->post('st_inst_name');
            $student['st_present_address'] 		= $this->input->post('st_present_address');
            $student['st_permanent_address'] 	= $this->input->post('st_permanent_address');
            $student['student_type'] 			= 'student';
			$student['who_add'] 					= $this->input->post('who_add');
            $student['st_union_pourosova'] 		= $this->input->post('st_union_pourosova');
            $student['st_ward'] 			        = $this->input->post('st_ward');
	
				 
			$this->db->where('st_id', $st_id);
			$this->db->update('student', $student);

	
	
			// Insert Data In parents_info Table 
			 $parents_info['uid'] 				    =$st_id;
			 $parents_info['fathers_name'] 		    = $this->input->post('fathers_name');
			 $parents_info['fathers_phone'] 		= $this->input->post('fathers_phone');
			 $parents_info['fathers_nid'] 	    	= $this->input->post('fathers_nid');
			 $parents_info['fathers_profession'] 	= $this->input->post('fathers_profession');
			 $parents_info['mothers_name'] 		    = $this->input->post('mothers_name');
			 $parents_info['mothers_phone'] 		= $this->input->post('mothers_phone');
			 $parents_info['mothers_nid']			= $this->input->post('mothers_nid');
			 $parents_info['mothers_profession'] 	= $this->input->post('mothers_profession');
	
			$this->db->where('parents_info_id ', $parents_info_id );
			$this->db->update('parents_info', $parents_info);

	

			$guardian_info['uid'] = $st_id;
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
				 
			
			$this->db->where('uid', $st_id );
			$this->db->update('guardian_info', $guardian_info);
			
						 
	
		}
    public function create_non_student()
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
        //    $student['st_phone'] 				= $this->input->post('st_phone');
		
        $student['st_nid_no'] 				= $this->input->post('st_nid_no');
        $student['st_birth_certificate_id'] 	= $this->input->post('st_birth_certificate_id');
        $student['st_health_condition'] 		= $this->input->post('st_health_condition');
        $student['st_photo'] 				= $st_photo;
        $student['st_present_address'] 		= $this->input->post('st_present_address');
        $student['st_permanent_address'] 	= $this->input->post('st_permanent_address');
		$student['who_add'] 					= $this->input->post('who_add');
        $student['marital_status'] 			= 'Single';
        $student['student_type'] 			= 'non_student';
		$student['st_union_pourosova'] 		= $this->input->post('st_union_pourosova');
		$student['st_ward'] 			        = $this->input->post('st_ward');


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


        // Insert Data In guardian_info Table
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


    }


	public function update_non_student()
	{
		$st_id 				= $this->input->post('st_id');
		$parents_info_id 	= $this->input->post('parents_info_id');
		$guardian_id		= $this->input->post('guardian_id ');
			
		$st_photo = $_FILES['st_photo']['name'];

		 //OLD IMAGE
		 $prev_st_photo = $this->input->post('old_st_photo');

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
			 $st_photo = $prev_st_photo;
		}
		
		 // Insert Data In Student Table 
		$student['st_name'] 					= $this->input->post('st_name');
		$student['st_date_of_birth'] 		= $this->input->post('st_date_of_birth');
		$student['st_gender'] 				= $this->input->post('st_gender');
		$student['st_bg_group'] 				= $this->input->post('st_bg_group');
		$student['st_religion'] 				= $this->input->post('st_religion');
		//    $student['st_phone'] 				= $this->input->post('st_phone');
		$student['st_nid_no'] 				= $this->input->post('st_nid_no');
		$student['st_birth_certificate_id'] 	= $this->input->post('st_birth_certificate_id');
		$student['st_health_condition'] 		= $this->input->post('st_health_condition');
		$student['st_photo'] 				= $st_photo;
		$student['st_present_address'] 		= $this->input->post('st_present_address');
		$student['st_permanent_address'] 	= $this->input->post('st_permanent_address');
		$student['who_add'] 				= $this->input->post('who_add');
		$student['student_type'] 			= 'non_student';
		$student['st_union_pourosova'] 		= $this->input->post('st_union_pourosova');
		$student['st_ward'] 			        = $this->input->post('st_ward');

			 
		$this->db->where('st_id', $st_id);
		$this->db->update('student', $student);



		// Insert Data In parents_info Table 
		 $parents_info['uid'] 				    =$st_id;
		 $parents_info['fathers_name'] 		    = $this->input->post('fathers_name');
		 $parents_info['fathers_phone'] 		= $this->input->post('fathers_phone');
		 $parents_info['fathers_nid'] 	    	= $this->input->post('fathers_nid');
		 $parents_info['fathers_profession'] 	= $this->input->post('fathers_profession');
		 $parents_info['mothers_name'] 		    = $this->input->post('mothers_name');
		 $parents_info['mothers_phone'] 		= $this->input->post('mothers_phone');
		 $parents_info['mothers_nid']			= $this->input->post('mothers_nid');
		 $parents_info['mothers_profession'] 	= $this->input->post('mothers_profession');

		$this->db->where('parents_info_id ', $parents_info_id );
		$this->db->update('parents_info', $parents_info);



		$guardian_info['uid'] = $st_id;
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
			 
		
		$this->db->where('uid', $st_id );
		$this->db->update('guardian_info', $guardian_info);
		
					 

	}

      function get_student_id($table, $id)
    {
        $result = $this->db->get_where($table, ['st_id' => $id])->row();
        return $result;
    }
          function parents_info_id($table, $parents_info_id)
    {

        $result = $this->db->get_where($table, ['uid' => $parents_info_id])->row();
        return $result;
    }

    function guardian_info_id($table, $guardian_info_uid)
        {

            $result = $this->db->get_where($table, ['uid' => $guardian_info_uid])->row();
            return $result;
        }


	public function birth_chack($birth_id){
        $this->db->select('*');
        $this->db->from('birth_chack');
        $this->db->where('birth_id', $birth_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }


	public function create_marriage_couple()
	{
			
     // Insert Data 
	 $data = array(
		'groom_name' 					   	=> 	$this->input->post('groom_name'),
		'groom_date_of_birth'				=>	$this->input->post('groom_date_of_birth'),
		'groom_gender'						=>	$this->input->post('groom_gender'),
		'groom_bg_group'					=>	$this->input->post('groom_bg_group'),
		'groom_religion' 					=>	$this->input->post('groom_religion'),
		'groom_nid_no' 						=>	$this->input->post('groom_nid_no'),
		'groom_birth_certificate_id'		=>	$this->input->post('groom_birth_certificate_id'),
		'groom_health_condition'			=>	$this->input->post('groom_health_condition'),
		'groom_photo'						=>	$this->input->post('groom_photo'),
		'groom_inst_name'					=>	$this->input->post('groom_inst_name'),

		'bride_name'						=>	$this->input->post('bride_name'),
		'bride_date_of_birth' 				=>	$this->input->post('bride_date_of_birth'),
		'bride_gender' 						=>	$this->input->post('bride_gender'),
		'bride_bg_group'					=>	$this->input->post('bride_bg_group'),
		'bride_religion'					=>	$this->input->post('bride_religion'),
		'bride_nid_no'						=>	$this->input->post('bride_nid_no'),
		'bride_birth_certificate_id'		=>	$this->input->post('bride_birth_certificate_id'),
		'bride_health_condition' 			=>	$this->input->post('bride_health_condition'),
		'bride_photo' 						=>	$this->input->post('bride_photo'),
		'bride_inst_name'					=>	$this->input->post('bride_inst_name'),

		'marriage_status'					=>	'pending',
		'marriage_certificate_status'		=>	'pending',

		'medium_user'						=>	$this->input->post('medium_user'),
		'medium_full_name'						=>	$this->input->post('medium_full_name'),

		
	);

       $this->db->insert('marriage_couple', $data);	   

	}
// Painding Marriage List 
function get_pending_marriage() {
	$this->db->order_by("marriage_couple_id ", "DESC");
	$query = $this->db->get("marriage_couple");
	return $query->result();
	}
	
    function approve_marriage() {
        $marriage_couple_id  = $this->uri->segment(3);

		$data = array(
            'marriage_status' => 'Married',
        );
		
        $this->db->where('marriage_couple_id', $marriage_couple_id);
        $this->db->update('marriage_couple', $data);

//        $data = array(
//            'marriage_status' => 'Married',
//        );
//
//		$this->db->where('student', $marriage_couple_id);
//        $this->db->update('student', $data);
    }

	function reject_marriage() {
		$marriage_couple_id  = $this->uri->segment(3);

		$data = array(
			'marriage_status' => 'rejected',
		);

		$this->db->where('marriage_couple_id', $marriage_couple_id);
        $this->db->update('marriage_couple', $data);
	}

	function get_marriage_details($table, $marriage_couple_id)
	{
		$result = $this->db->get_where($table, ['marriage_couple_id ' => $marriage_couple_id ])->row();
		return $result;
	}

}

