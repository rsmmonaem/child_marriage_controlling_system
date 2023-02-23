<?php
ob_start();
class Fw_registration_model  extends CI_Model {

    //start FIELD WORKER Functions

    function create_field_worker() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("branch_code", "branch_code", "xss_clean");
        $this->form_validation->set_rules("field_worker", "field_worker", "xss_clean");
        $this->form_validation->set_rules("fw_id_no", "fw_id_no", "xss_clean");
        $this->form_validation->set_rules("cont_num", "cont_num", "xss_clean");
        $this->form_validation->set_rules("email", "email", "xss_clean");
        $this->form_validation->set_rules("image", "fw_image", "xss_clean");
        $this->form_validation->set_rules("fw_cv", "fw_cv", "xss_clean");
        $this->form_validation->set_rules("user_name", "user_name", "xss_clean");
        $this->form_validation->set_rules("pass_word", "pass_word", "xss_clean");
        $this->form_validation->set_rules("status", "status", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('fw_registration/create_field_worker/error');
        } else {
            $image = $_FILES['image']['name'];
            if ($image != "") {
                $image = random_string('alnum', 10) . '.jpg';
                
                //insert image
                $config['file_name'] = $image;
                $config['upload_path'] = 'uploads/photos';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;
                $config['image_library'] = 'gd2';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('image');

                $file_data = $this->upload->data();
            } else {
                $image = "default.png";
            }

            $fw_cv = $_FILES['fw_cv']['name'];
            if ($fw_cv != "") {
                $fw_cv = random_string('alnum', 10) . '.pdf';
                //insert image
                $config['file_name'] = $fw_cv;
                $config['upload_path'] = 'uploads/cv';
                $config['allowed_types'] = 'pdf|doc';
                $config['max_size']         = '500000';
                $config['encrypt_name']     = false;
                //$config['image_library'] = 'gd2';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('fw_cv');

                $file_data = $this->upload->data();
            } else {
                $fw_cv = "cv_not_found.jpg";
            }

            //branch name select
            $branch_code = $this->input->post('branch_code');

            $this->db->where('branch_code', $branch_code);
            $query = $this->db->get("branch_office")->result();
            foreach ($query as $row) {
                // $zonal_office = $row->zonal_office;
                // $zonal_code = $row->zonal_code;
                $branch_office = $row->branch_office;
            }

            $fw_id_no = $this->input->post('fw_id_no');
            $user_name = $this->input->post('user_name');
            $status = "DISABLE";
            $pass_word = "CF1234";

            //insert data to database
            $data = array(
                'user_id'             => $fw_id_no,
                'status'             => $status,
                'zonal_office'         => '',
                'zonal_code'         => '',
                'branch_office'     => $branch_office,
                'branch_code'         => $branch_code,
                'field_worker'         => $this->input->post('field_worker'),
                'fw_id_no'             => $fw_id_no,
                'designation'        => 'field_worker',
                'cont_num'            => $this->input->post('cont_num'),
                'email'             => $this->input->post('email'),
                'fw_image'             => $image,
                'fw_cv'             => $fw_cv,
                'target'             => '0',
                'achieve'             => '0',
                'user_name'         => $user_name,
                'pass_word'         => $pass_word,
                'created_date'         => date('Y-m-d H:i:s'),
                'update_date'         => date('Y-m-d H:i:s'),
            );

            $data2 = array(
                'status'             => $status,
                'user_name'         => $user_name,
                'user_id'             => $fw_id_no,
                'pass_word'         => $pass_word,
                'user_type'         => "field_worker",
                'full_name'         => $this->input->post('field_worker'),
                'update_date'         => date('Y-m-d H:i:s')
            );
            
            $this->db->insert('field_worker', $data);
            $this->db->insert('admin_user', $data2);

            //$id = $this->db->insert_id();

            redirect("fw_registration/success/" . $fw_id_no . "/" . $user_name . "/" . $pass_word);
        }
    }

    // end of field worker Functions

}
